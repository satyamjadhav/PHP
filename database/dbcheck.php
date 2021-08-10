<?php
  $con=new mysqli("localhost","root","","proj");
  // echo "<pre>";
  // print_r($con);

  if(isset($con->client_info))
  {
  	echo "database connected";
  }
  else{
  	echo "database not connected";
  }
 ?>