<?php

require_once '../includes/constants.php';

class mysql {
	private $conn;
	
	function __construct() {
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
			die('There was a problem connecting to the database.');
	}
	
	function verify_Username_and_Pass($un, $pwd) {
			
			$query = "SELECT *
				FROM users
				WHERE username = ? AND password = ?
				LIMIT 1";
				
			if($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param('ss', $un, $pwd);
				$stmt->execute();
				
				if($stmt->fetch()) {
					$stmt->close();
					return true;
				} else return false;
		}
	}
	
	function check_zipcode($zip) {
		$query = "SELECT *
				FROM Zip
				WHERE Zip = ? AND Status = 1
				LIMIT 1";
				
			if($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param('s', $zip);
				$stmt->execute();
				
				if($stmt->fetch()) {
					$stmt->close();
					return true;
				} else return false;
		}
	}
}

?>