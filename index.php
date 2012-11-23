<!DOCTYPE html>
<html>
<head>
<title>Simple Durarara Login</title>
<style type='text/css'>
body {
	background-color: #000000;
	text-align: center;
}
#logo {
	padding-top: 80px;
	padding-bottom: 20px;
}
</style>
</head>
<body>

<div class = 'container'>
	<img id = 'logo' src = 'images/DOLLARS.png' alt = '[Login image]'/>
	<form name='form1' method='post' action='checklogin.php'>
		<p>
			<img src='images/uname.jpg' alt='Username'>
			<input name='myusername' type='text' id='myusername'>
		</p>
		<p>
			<img src = 'images/pw.gif' alt='Password'>
			<input name='mypassword' type='password' id='mypassword'>
		</p>
		<p>
			<input type='image' src='images/ENTER.png' name='Submit' alt='submit'>
		</p>
	</form>
</div>
</body>
</html>