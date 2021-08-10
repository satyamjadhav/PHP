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
  class calci{
      private $a;
      private $b;
      private $op;

      function __construct(){
           $this->a=$_GET['num1'];
           $this->b=$_GET['num2'];
           $this->op=$_GET['choice'];
           if($this->op == "1")
           {
               $this->add();
           }

           else if($this->op == "2")
           {
               $this->sub();
           }

           else if($this->op == "3")
           {
               $this->mul();
           }

           else if($this->op == "4")
           {
               $this->div();
           }

           private function add()
          {
          $res=$this->a+$this->b;
          echo "<br>addition is $res";
          }

           private function sub()
          {
          $res=$this->a-$this->b;
          echo "<br>subtraction is $res";
          }

           private function mul()
          {
          $res=$this->a*$this->b;
          echo "<br>multiplication is $res";
          }

           private function div()
          {
          $res=$this->a/$this->b;
          echo "<br>division is $res";
          }

      }
      
  }
  $obj=new calci();
  print_r($_GET);
?> 