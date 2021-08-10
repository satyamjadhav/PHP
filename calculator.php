<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
    <h2>registration form</h2>
    <form action="" method="GET">
      <p><input type="number" name="num1"></p>
    	<p><input type="number" name="num2"></p>
      <p><select name="choice">
          <option value="1">add</option>
          <option value="2">sub</option>
          <option value="3">mul</option>
          <option value="4">div</option>
      </select></p>
    	<p><input type="submit" name="result" value="result"></p>
    </form>
</body>
</html>

<?php
   if (isset($_GET['choice'])){
       $num1=$_GET['num1'];
       $num2=$_GET['num2'];
       $choice=$_GET['choice'];
       if($choice == '1')
         {
           $result=$num1+$num2;
           echo($result);  
         }
       else if($choice == '2')
         {
           $result=$num1-$num2;
           echo($result);
         }
          else if($choice == '3')
         {
           $result=$num1*$num2;
           echo($result); 
         }
          else if($choice == '4')
         {
           $result=$num1/$num2;
           echo($result); 
         }
  
   }
   else{
      echo "enter values";
   }
 
   

?>