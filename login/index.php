

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style>
	*{
		margin: 0px;
		padding:0px;
	}
		   .main
		      {
		   	    width:1335px;
		    	height:640px;
		    	background-color: pink;
		        border:1px solid transparent;
		      }
           .form
              {
             	width: 30%;
             	height:400px;
             	margin:120px 20px;
             	float: left ;
              }
           .form2
             {
            	width: 30%;
            	height:400px;
            	background-color: #fff;
            	margin:120px 20px;
            	float: left;
            	border-radius: 10px;
             }
           .logo
             {
           	    width: 100px;
           	    height: 100px;
           	    background-color: yellow;
           	    border-radius: 50px;
           	    margin:-50px 10px 40px 150px;
           	 }
           .uimg
             {
              	width: 60%;
              	margin: 20px;
             }
           .heading{text-align: center;
           	margin: 40px;
           	color: grey;
           	font-size:30px;
           }
           .user{width: 350px;
           	height: 30px;
           	text-align: center;
           	margin: 10px 20px;
           }
           .submit
           {
                width: 360px;
            	height: 50px;
            	text-align: center;
            	margin: 10px 20px;
           	    background-color: blue;
           	    color: white;
	            border-radius: 10px;
	            border: none;
	       }
           .forgot
           {
           	   text-align: center;
           	   color: red;
           }
           form input
           {
         	   font-size:18px;
           }
    </style>
</head>
<body>
	<div class="main">
		<div class="form"></div>
		<div class="form2">
			<div class="logo">
				<img class="uimg" src="user-shape.png">
			</div>
			<h2 class="heading">Member Login</h1>
			<p></p>
			<form action="check.php" method="POST">
				<input class="user" type="test" name="user" placeholder="Username">
				<input class="user" type="test" name="password" placeholder="Password">
				<input class="submit" type="submit" name="" >
			</form>
			<p class="forgot">Forgot Password?</p>
		</div>
		<div class="form">
	
		</div>
		
	</div>
</body>
</html>