<?php
 session_start();
 $user=$_POST['user'];
 $password=$_POST['password'];
 if($user == 'sam@gmail.com' && $password == 123)
 {
 	session_start();
    $_SESSION['user']=true;
 	header("location:welcome.php");
 }
 else if($user == 'admin@gmail.com' && $password == 1234)
 {
   session_start();
    $_SESSION['admin']=true;     
   header("location:admin/admin.php");
 }
 else{
    session_destroy();
    header("location:index.php");
 }




 ?>