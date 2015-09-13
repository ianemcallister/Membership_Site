<?php

require_once '../classes/zipConfirm.php';
$coverageArea = new coverageArea();

if($_POST && !empty($_POST['zip'])) {
	$goodZip = $coverageArea->validate_zip($_POST['zip']);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Find A Teacher</title>
<link type="text/css" rel="stylesheet" href="enrollmentStyles.css"/>

</head>

<body>

<p><h2>Lets Find a Teacher!</h2></p>

	<div class="InquiryPanels"id="InputWindow">
    	<form method="post" action="">
        	<p>What is your Zip Code?<br /><br />
            <input type="number" name="zip" />
            </p>
            
            <p>
    		<input type="submit" id="submit" value="Submit" name="submit" />
    		</p>
            
        </form>

    </div>

<p><a id="HomeBtn" href="../index.php">Back To Home</a></p>
    
    
</body>
</html>