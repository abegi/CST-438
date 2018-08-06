<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/BaseController.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/Database.php');

    class AlertController extends BaseController{

        protected $db;

        // Dependency Injection
        public function __construct(Database $db)
        {
            $this->db = $db;
        }

        public function setAlert($price, $id, $email)
        {
            // Create alert
            // If price < 0, return false
            if($price < 0)
            {
                echo("$price is not a valid value");
                return false;
            }

            // If id not valid, return false
            if(!in_array($id, $ids))
            {
                echo("$id not in $ids");
                return false;
            }

            // If email format not valid, return false
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo("$email is not a valid email address");
                return false;
            }

            // Inserts email into db with corresponding data
            $this->db->query("INSERT INTO Alerts (price, id, email)
                VALUES ({$price}, {$id}, {$email}) ");

        }

        public function sendAlert($price, $id)
        {
            // send message to email

            // Dependency Injection
            $result = $this->db->query("SELECT email FROM Alerts WHERE id = {$id} AND price <= {$price}");
            $message = "Coin {$is} has reached \${$price}";

            // Sends to each email that matches query
            // If message send fails, return false
            while($row = mysql_fetch_array($result))
            {
                // send email
                $mail_sent = mail($row['email'],"Coin Allert",$message);
                if ($mail_sent)
                {
                    echo "Mail Sent";
                } else {
                    echo "Mail Failed";
                    return false;
                }

            }

        }

    }

?>
