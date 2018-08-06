<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/AlertController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/Database.php');

final class AlertControllerTest extends TestCase
{
    public function setUp()
    {
        // Setting up a dependency injected AlertController
        $this->db = new Database();
        $this->ac = new AlertController($this->db);
    }

    public function tearDown()
    {
        // tear down user AlertController
        unset($this->ac);
    }

    // Test that a valid alert sets and returns true
    public function testSetValidAlert(){
        $this->assertNotFalse(
            $this->ac->setAlert(1.25, 1182, 'awieland@csumb.edu')
        );
    }

    // Tests that an invalid attempt at setAlert return false
    public function testSetInvalidIdAlert(){
        $this->assertFalse(
            $this->ac->setAlert(1.25, 0, 'awieland@csumb.edu')
        );
    }

    // Tests that an invalid price will return false
    public function testSetInvalidPriceAlert(){
        $this->assertFalse(
            $this->ac->setAlert(-0.1, 1182, 'awieland@csumb.edu')
        );
    }

    // Tests that an invalid email will return false
    public function testSetInvalidEmailAlert(){
        $this->assertFalse(
            $this->ac->setAlert(1.25, 1182, 'Andrea')
        );
    }

    // Tests that email sending works with valid input
    public function testSendAlertValidEmail(){
        $this->assertNotFalse(
            $this->ac->sendAlert(1.25, 1182)
        );
    }
}

?>
