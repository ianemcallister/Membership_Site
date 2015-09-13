<?php

require_once 'ZipMysql.php';

class coverageArea {
		
		function validate_zip($zip) {
			$mysql = new mysql();
			$confirm_coverage = $mysql->check_zipcode($zip);
			
			if($confirm_coverage) {
				header('location: studentInfo.php?zip='.urlencode($zip));
				
			} else {
				header('location: followup.php?zip='.urlencode($zip));
			}
					

			
		}
		
/*		function validate_user($un, $pwd){
			$mysql = new mysql();
			$ensure_credentials = $mysql->verify_Username_and_Pass($un, $pwd);
				
			if($ensure_credentials) {
				$_SESSION['status'] = 'authorized';
				header('location: index.php');
				
			} else return "Please enter a correct username and password";
				
				
		}
*/
}
?>