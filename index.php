<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$includes = $root.'includes';

require_once 'classes/membership.php';
$membership = new membership();

$membership->confirm_member();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/YMStylesheet.css"/>
<title>Login</title>

<script type="text/javascript" src="../jquery.js"></script>

<script type="text/javascript">
	$(function() {
	
	});
</script>

</head>


<body>
	<h1>Welcome To Young Musicians</h1>
    <h2> What would you like to work on today? </h2>
 
 	<div class="ActivityBttns"><a href="Teaching/index.php">Teaching</a></div>
 	<div class="ActivityBttns"><a href="">Learning</a></div>
 	<div class="ActivityBttns"><a href="">Listening</a></div>
 	<div class="ActivityBttns"><a href="">Playing</a></div>
    
 
	 <p><div id="FindATeacherButton"><a href="enrollment/index.php">
     		Find A Teacher!</a></div></p>
            
	<p><a id="HomeBtn" href="login.php?status=loggedout">Log Out</a></p>

<div id="container">

</div><!--end container-->



</body>
</html>
