<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Image Upload form</title>
		<style type="text/css">
		*{
			margin: 0;
			padding-top: 0;
		}
			.container{
				width:100vw;
				height:100vh;
				border:1px solid black;
				margin:0 auto;
				background-color:#b3e1f1;
			}
			.font{
				color:white;
				font-size:30px;
                text-align:CENTER;
			}
			.header{
				height:40px;
			    background-color: #3a87e3;
				text-align:CENTER;
				font-family:sans-serif;
				font-weight:bolder;
				padding-top:10PX;
				text-shadow:2px 2px 4px black;
			}
			.upload{
				width:500px;
				height:300px;
				margin:50px auto;
				border:1px solid black;
			}
			.uploadhead{
				text-shadow:2px 2px 6px black;
				position:relative;
				width: 100%;
				box-sizing: border-box;
				background-color:#ea7a4c;
				color: white; 	
			}
			.upload{
				box-shadow:1px 1px 9px Black;
				background-color:#f4f0e7;
				color:black;
			}
			input{
				width:60%;
				height:30px;
				/*background-color:#ea7a4c;*/
			}
			</style>
	</head>
 	<body>
          <div class="container font">
          	 <div class="header">FILE UPLOADER</div>
          	 <div class="upload">
          	 	<div class="uploadhead">
                        <img src="img/UPLOAD.png">
          	 	        <span>SELECT FILES</span>
          	 	</div>
          	 	<form method="post" action="getdata.php" enctype="multipart/form-data">
			        <p><br>
			        	
			             <input type="file" name="img"></p>
                  <BR>

			             <input type="submit" value="upload">
		           </form>
          	 </div>
          </div>



		
	</body>
</html>