<?php 
   session_start();
   if(!($_SESSION['user']==1))
   {
   	header("location:index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome page</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
		body{
			background-color:palegreen;
		}
		h1{
			font-size:50px;
			margin-top:300px;
			margin-left:430px;
		}
		img{
			width: 100vw;
		}
		button{
			width:70px;
			height:30px;
			position:absolute;
			top: 40px;
			right:80px;
			background-color:#fcb759;
			border: none;
			border-radius:20px;
			font-size: 15px;
		}
		image{
			position: relative;
		}
	</style>
</head>
<body>
	<a href="logout.php"><button>Logout</button></a>
   <img src="homepage.jpg">
</body>
</html>