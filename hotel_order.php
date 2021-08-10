<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hotel service</title>
	<style type="text/css">
		.container{
			background-image:url(img/bgimage.jpg);
			text-align:center;
			position: relative;

		}
		.container img{
           width: 100%;
           height:100vh;

		}
		.content{
			left: 600px;
			top: 40px;
			position:absolute;
		}
	</style>
</head>
<body style="background-color:yellowgreen;">
	<div class="container">
		<img src="img/bgimage.jpg">
		<div class="content">
         <h2>Hotel service</h2>
        <form method="POST" action="">
             <p>
              	<span style="font-size:20px;">Select Items</span>
                <input type="text" name="items"  style="background-color:white;">
                <span style="font-size:20px;">Select quantity</span>
                <input type="number" name="quantity" style="background-color:white;">
                <input type="submit" name="order" value="order" style="background-color: green;color: white;">
              </p>
    </form>
    <?php
   // print_r($_GET);
    if($_POST)
    {
       $item=$_POST['items'];
       $quantity=$_POST['quantity'];
       $menu=array('samosa'=>20,'idli'=>30,'poha'=>15,'kachori'=>25);
       $result=array_key_exists($item,$menu);
       if($result == 1)
        {
         $bill=$quantity*$menu[$item];
         echo "Your bill amount is Rs.".$bill;
         }
    }
    else{
    	echo "select the choices";
    }
   // echo $item;
   // echo $quantity;

   // $items=array('samosa','idli','dosa','kachori');
  
   // exit();
   // if()
   // {
   // 	 $bill=$quanity*$menu[$item];
   // 	 	 echo $bill;
   // }

   // if(in_array($item,$items))
   // {
   // 	 echo "item available,enjoy";
   // }
   // else{
   // 	echo "item not available";
   // }



?>
    </div>
    </div>
</body>
</html>

