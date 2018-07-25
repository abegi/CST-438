<?php
    
    require(dirname(__FILE__).'/'.'BaseController.php'); 
    
    class AlertController extends BaseController{
    
        private function __construct($price, $id, $email)
        {
            $this->setAlert($price, $id, $email);
        }
        
        public function sendAlert()
        {
            //send message to email
            
        }
    
    }
    
?>
