<?php 	
  // print_r($_GET);
  $new=$_GET['submit'];
  // echo $new;
  $number=" ";
  $number=$number.$new;
  // echo $number;
  header("location:calculator.php?num=$number");
 ?>