<?php
session_start();
require_once 'classes/membership.php';
$membership = new membership();

//If the user clisk the "Log Out" link in the index page.
if(isset($_GET['status']) && $_GET['status'] == 'loggedout') {
	$membership->log_User_Out();
}

// Did the user enter a password/username and hit submit
if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
	$response = $membership->validate_user($_POST['username'], $_POST['pwd']);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login to access the secret files</title>
<link rel="stylesheet" type="text/css" href="css/default.css" />
</head>

<body>

<div id="login">
	<form method="post" action="">
    <h2>Login <small>enter your credentials</small></h2>
	<p>
    	<label for="username">Username:</label>
        <input type="text" name="username" />
    </p>
    
    <p>
    	<label for="pwd">Password:</label>
        <input type="password" name="pwd"/>
    </p>
    
    <p>
    	<input type="submit" id="submit" value="Login" name="submit" />
    </p>
    
</form>
<?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>"; ?>
</div> <!--end login -->

</body>
</html>