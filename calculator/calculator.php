<?php 
error_reporting(0); //to hide the errors(notice)


if(isset($_GET['submit']))
{
	$number=$_GET['submit'];
	if($number == 'C')
	   {
		    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	      fwrite($myfile, "");
	      fclose($myfile);
	   }
	else if($number =='=')
	   {
		    $readfile = fopen("newfile.txt", "r") or die("Unable to open file!");
        $newdata=fread($readfile,filesize("newfile.txt"));
        fclose($readfile);   
	   }
	else
	   {
	      $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
	      fwrite($myfile, $number);
	      fclose($myfile);
     } 



  $readfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $data=fread($readfile,filesize("newfile.txt"));
  fclose($readfile);


  if((strpos($newdata,'+'))!= false)
     {
	  // echo "+ found";
	      $new=explode('+', $newdata);
	      $sum=0;
        for($i=0;$i<count($new);$i++)
             {
	               // echo $new[$i];
	               $sum=$sum+$new[$i];
	               // $data=$sum;
             }
        $data=$sum;
      }  
  else if((strpos($newdata,'-'))!= false)
     {
	        // echo "- found";
	      	$new=explode('-', $newdata);
	        $sub=0;
          for($i=0;$i<count($new);$i++)
              {
								   // echo $new[$i];
								   $sub=abs($new[$i]-$sub);
								  
								   // $data=$sum;
              }
          $data=$sub;
      } 

  else if((strpos($newdata,'*'))!= false)
      {
					// echo "* found";
					$new=explode('*',$newdata);
					  $mul=1;
				   for($i=0;$i<count($new);$i++)
                {
								   // echo $new[$i];
								   $mul=$mul*$new[$i];
								   // $data=$sum;
							   }
           $data=$mul;
      }
  else if((strpos($newdata,'/'))!= false)
      {
				// echo "/ found";
				$new=explode('/',$newdata);
				
        for($i=0;$i<count($new);$i++)
            {
   	            if($i==0)
   	               {
								   	 	$div=$new[0];
								   	 	continue;
   	               }
                $div=$div/$new[$i];
            }
        $data=$div;
      }
  else{
	       pass;
      }

  }

?>








<!-- html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator using php</title>
	<link rel="stylesheet" type="text/css" href="css/calculator.css">
	<script type="text/javascript" src="js/calculator.js"></script>
</head>

<body>
	<button onclick="show_data()">Online Calculator</button>
	<form id="form1">
   <table>
   	  <tr>
   	  	<td colspan="4">
   	  		<input class="input" dir="rtl" type="text" name="" style=""  value="<?php echo $data;?>">
   	  	</td>
   	  </tr>
   	   <tr>
   	  		<td><input class="number" type="submit" name="submit" value="7"></td>
   	  		<td><input class="number" type="submit" name="submit" value="8"></td>
   	  		<td><input class="number" type="submit" name="submit" value="9"></td>
   	  		<td><input class="operator"  type="submit" name="submit" value="/"></td>
   	  </tr>
   	  <tr>
   	  		<td><input class="number" type="submit" name="submit" value="4"></td>
   	  		<td><input class="number" type="submit" name="submit" value="5"></td>
   	  		<td><input class="number" type="submit" name="submit" value="6"></td>
   	  		<td><input class="operator"  type="submit" name="submit" value="+"></td>
   	  </tr>
   	  <tr>
   	  		<td><input class="number" type="submit" name="submit" value="1"></td>
   	  		<td><input class="number" type="submit" name="submit" value="2"></td>
   	  		<td><input class="number" type="submit" name="submit" value="3"></td>
   	  		<td><input class="operator"  type="submit" name="submit" value="-"></td>
   	  </tr>
   	  <tr>
   	  	  <td><input class="operator1 operator" type="submit" name="submit" value="C"></td>
   	  		<td><input class="operator" type="submit" name="submit" value="0"></td>
   	  		<td><input class="operator" type="submit" name="submit" value="="></td>
   	  		<td><input class="operator" type="submit" name="submit" value="*"></td>
   	  </tr>
   </table>
   </form>

</body>
</html>

