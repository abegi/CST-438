<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'src/API/Controllers/DatabaseSettings.php');

class Database extends DatabaseSettings
{
    var $classQuery;
	var $conn;

	var $errorNo = '';
	var $error = '';

	// Connect to database
	function DBClass()
	{
        // Get the main settings from the DatabaseSettings
		$settings = DatabaseSettings::getSettings();
		$host = $settings['dbhost'];
		$name = $settings['dbname'];
		$user = $settings['dbusername'];
		$pass = $settings['dbpassword'];

		// Connect to the database
		$this->conn = new mysqli($host, $user, $pass, $name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
	}

	// Executes a database query
	function query($query)
	{
		$this->classQuery = $query;
		return $this->conn->query($query);
	}

	// Get the number of rows, return int result
	function numRows($result)
	{
		return $result->num_rows;
	}

	// Gets array of query results
	function fetchArray($result, $resultType = MYSQLI_ASSOC)
	{
		return $result->fetch_array($resultType);
	}

	// Fetches all result rows as an associative array, a numeric array, or both
	function fetchAll($result, $resultType = MYSQLI_ASSOC)
	{
		return $result->fetch_all($resultType);
	}

	// Get a result row as an enumerated array
	function fetchRow($result)
	{
		return $result->fetch_row();
	}

	//Closes the database connection
	function close()
	{
		$this->conn->close();
	}

	function sql_error()
	{
		if(empty($error))
		{
			$errorNO = $this->conn->errorNO;
			$error = $this->conn->error;
		}
		return $errorNO . ' : ' . $error;
	}
}


 ?>
