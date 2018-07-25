<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AlertControllerTest extends TestCase
{
  
    public function setValidAlert(){
        $this->assertNotFalse(
            AlertController::setAlert(1.25, 1182, 'awieland@csumb.edu')
        );
    }
  
    public function setInvalidIdAlert(){
        $this->assertFalse(
            AlertController::setAlert(1.25, 0, 'awieland@csumb.edu')
        );
    }
  
    public function setInvalidPriceAlert(){
        $this->assertFalse(
            AlertController::setAlert(-0.1, 1182, 'awieland@csumb.edu')
        );
    }
    
    public function setInvalidEmailAlert(){
        $this->assertFalse(
            AlertController::setAlert(1.25, 1182, 'Andrea')
        );
    }
  
    public function sendAlertValidEmail(){
        $this->assertNotFalse(
            AlertController::sendAlert()
        );
    }
}
