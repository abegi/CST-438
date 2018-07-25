<?php
    
    require(dirname(__FILE__).'/'.'BaseController.php'); 
    
    class AlertController extends BaseController{
    
        private function __construct($price, $id, $email)
        {
            $this->setAlert($price, $id, $email);
        }
        
        public function setAlert($price, $id, $email)
        {
            //create alert
            //if price < 0, return false
            //if id not valid, return false
            //if email format not valid, return false
            
        }
        
        public function sendAlert()
        {
            //send message to email
            //if message send fails, return false
            
        }
    
    }
    
?>
