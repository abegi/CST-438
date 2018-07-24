<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/CoinController.php');

final class CoinControllerTest extends TestCase
{
    public function testGetCoin200()
    {
        $this->assertEquals(
            'hello',
            CoinController::getCoin(5)
        );
    }

    public function testGetCoins200(){

    }

    public function testSortCoins(){

    }

    public function testFilterCoins(){

    }

    public function testGetCoinUrl(){

    }

    public function testGetCoinSymbol(){

    }

    public function testGetCoinError(){

    }

    public function testGetCoinsError(){
        
    }
}