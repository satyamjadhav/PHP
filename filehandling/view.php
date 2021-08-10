<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View</title>
</head>
<body>
    <h2>view data</h2>
    <table border="1">
    	<tr>
    	<th>Fname</th>
    	<th>Lname</th>
    	<th>Email</th>
    	<th>Password</th>
    	</tr>
    	  
    	 <?php
           $myfile = fopen("text.txt", "r") or die("Unable to open file!");
			$data=fread($myfile,filesize("text.txt"));

			$new=explode("\n",$data);
			$len=count($new);
			for($i=0;$i<$len;$i++)
			{
				$new1=explode(',',$new[$i]);
				$len1=count($new1);
				echo "<pre>";
				// print_r($new1);
				for($j=0;$j<$len1;$j++)
				{
					$new2=explode(':',$new1[$j]);
					echo "<pre>";
					// print_r($new2);
					$len2=count($new2);
					for($k=0;$k<$len2;$k++)
					{
                     echo $len2;  				  	
					  	// echo "<td>$new2[1]</td>";
					  	// echo "<td>$new2[1]</td>";
					  	// echo "<td>$new2[1]</td>";
					  	echo "<td>$new2[1]</td>";
					  	// echo "<td>$new2[2]</td>";
					  	// echo "<td>$new2[4]</td>";
					  	
					  }	
					  // echo "</tr>";
					}
					

					
					// $new2=explode(':',$new1[$j]);
					// $len2=count($new2);
					// for($k=0;$k<$len2;$k++)
					// {
					// 	echo "<tr></tr>";
					// 	echo "<td>$new2[$k]</td>";
					// }
				// }
				// echo "<tr></tr>";
				// echo "<td>".$new[1]."</td>";
				// echo "<pre>";
				// print_r($new2);
             }
			// $i=0;
			// for($i=0;$i<$len;$i++)
			// {
				// echo "<tr></tr>";
				// echo "<td>".$new[$i]."</td>";
			    // echo "<table>";
			    // echo "<tr>";
			    // echo "<th>First Name</th>";
			    // echo "<th>Last Name</th>";
			    // echo "<th></th>";
			    // echo "<tr>";
			    // echo "</table>";

fclose($myfile);
?>





    </table>
</body>
</html>

