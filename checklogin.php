<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
if(isset($_SESSION['loggedin']))
{
	die("You are already logged in!<br /> <a href='main.php'>Continue</a>");
}

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$encrypted_mypassword=md5($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Add $myusername, $mypassword to session and redirect to "main.php"
$_SESSION['loggedin'] = "YES";
$_SESSION['myusername'] = $myusername;
header("location:main.php");
}
else {
	die("Wrong username or password.<br /><a href='index.php'>Please try again</a>");
}

?>