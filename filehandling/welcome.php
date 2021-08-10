<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View data</title>
</head>
<body style="background-color:lightgoldenrodyellow;">
    <div>
    	<?php
  if(isset($_POST))
  {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  }

if(isset($fname))
{
$myfile = fopen("text.txt","a") or die("Unable to open file!");
$txt = "First name:".$fname.",";
fwrite($myfile, $txt);
$txt = "Last Name:".$lname.",";
fwrite($myfile, $txt);
$txt = "Email:".$email.",";
fwrite($myfile, $txt);
$txt = "Password:".$password."\n";
fwrite($myfile, $txt);
fclose($myfile);
}
else{
	echo "no data";
}

header("location:view.php");

?>



    </div>
</body>
</html>
