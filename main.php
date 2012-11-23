<?php
session_start();
if(!isset($_SESSION['loggedin']))
die("You need to be logged in to view this page.<br />Please click <a href=\"http://localhost/hubcode/index.php\">here</a> to log in.");
?>
<!DOCTYPE html>
<html>
<link href="head.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<title> Simple Durarara Login </title>
<body>
<?php
echo "Logged in as: " . $_SESSION['myusername'];
?>
<div class="header">
	<a href="main.php">HOME</a>
	<a href="logout.php">LOG OUT</a>
</div>

<div id ="container">
<p>Hello world!</p>
<h3>News</H3>
<p>23/11/2012</p>
<p>Created this page</p>
</div>

</body>
</html>