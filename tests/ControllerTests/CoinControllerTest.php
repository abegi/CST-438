<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/CoinController.php');

final class CoinControllerTest extends TestCase
{
    # checks if getCoin retrieves coin data
    public function testGetCoin200()
    {
        $this->assertArrayHasKey(
            'Response',
            CoinController::getCoin(1182)
        );
    }

    # checks if getCoins retrieves coins
    public function testGetCoins200()
    {
        $this->assertNotEmpty(
            CoinController::getCoins()
        );
    }

    # checks if sort operates properly
    public function testSortCoins()
    {
        $this->assertEquals(
            array('bitcoin','ethereum'),
            CoinController::sortCoins('Name', 'Asc')
        );
    }

    # checks if filterCoins filters out improper coins
    public function testFilterCoins()
    {
        $this->assertGreaterThanOrEqual(CoinController::filter(1000), 1001);
    }

    # checks if getCoinUrl retrieves a proper url
    public function testGetCoinUrl()
    {
        $this->assertStringStartsWith(
            'https://www.',
            CoinController::getCoinUrl(1182)
        );
    }

    # checks if getCoinSymbol retrieves unique coin symbol
    public function testGetCoinSymbol()
    {
        $this->assertEquals(
            'BTC',
            CoinController::getCoinSymbol(1182)
        );
    }

    # checks if getCoinError is true for an error in coin
    public function testGetCoinError()
    {
        $this->assertTrue(CoinController::getCoinError(1182));
    }
    
    # checks if getCoinsError is true for errors in coin retrieval
    public function testGetCoinsError()
    {
        $this->assertTrue(CoinController::getCoinsError());
    }
}

?>
