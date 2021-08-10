<?php
  session_start();
  $id=session_id();
  echo $id;
  $_SESSION['user']='harish';
  echo "valid user";
  echo $_SESSION['user'];
  session_destroy();
 ?>