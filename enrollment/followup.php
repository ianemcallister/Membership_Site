<?PHP
$zip = $_GET['zip'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Enrollment Request Follow Up</title>
</head>

<body>
<p>We're so sorry, but we don't have any teachers serving your area right now.</p>
<p>We'd like to keep in touch with you though.  We're taking note of your instrest in lessons in <?PHP echo $zip; ?> and will discuss your interest with our staff.</p>

<p>If you leave us your name and e-mail address we'll contact you when we are offereing service in your area</p>

<form method="post" action="">
	E-mail:<input type="text" name="e-mail" /></br>
	First Name:<input type="text" name="first" />
	Last Name:<input type="text" name="last" /></br>
    <input type="submit" name="submit" value="Submit" />
</form>

	<p><a id="HomeBtn" href="../index.php">Back To Home</a></p>
 

</body>
</html>