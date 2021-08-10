<!DOCTYPE html>
<html>
<head>
	<title>Css</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<p class="heading"><b>BUILD</b> YOUR PROFILE</p>
			<p class="para">This information will let us know more about you.</p>
		</div>
		<div class="orange"><p>ABOUT</p></div>
		<div class="grey"><p>ACCOUNT</p></div>
		<div class="grey"><p>ADDRESS</p></div>
		<P class="sub_head">Let's start with the basic information</P>
		<div class="profile">
			<div class="circle"></div>
			<p class="caption">CHOOSE PICTURE</p> 
		</div>
		<div class="form1">
			<form action="welcome.php" method="POST">

				<p>First Name:<input type="text" placeholder="Andrew" name="fname" style="margin-left:10px;"></p>
				<p>Last Name:<input type="text" placeholder="Smith" name="lname" style="margin-left:11px;"></p>
				<p>Email:<input type="email" placeholder="abc@gmail.com" name="email" style="margin-left:46px;"></p>
				<p>Password:<input type="text" placeholder="xxxx" name="password" style="margin-left: 15px;"></p>
				<input class=submit type="submit" value="submit">
			</form>
		</div>
		
	</div>
</body>
</html>
<?php
?>