<?php 
   session_start();
   if(!($_SESSION['admin']==1))
   {
      header("location:../index.php");
   }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Admin Page</title>
   <style type="text/css">
      img{
         position: relative;
      }
      a{
         position: absolute;
         top: 20px;
         right:30px;
         z-index: 1;
      }
      button{
         width:70px;
         height:30px;
         background-color:red;
         color:white;
         font-size:15px;
         border-radius: 15px;
      }
   </style>
 </head>
 <body>
   <a href="../logout.php"><button>Logout</button></a>
    <img src="../FLAT-PLUS.jpg" style="width:100vw;height:100vh;">
 </body>
 </html>