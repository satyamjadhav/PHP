<?php 
// echo "<pre>";
// print_r($_FILES);
$img_name = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_tmp_name = $_FILES['img']['tmp_name'];
$img_error = $_FILES['img']['error'];
$img_size = $_FILES['img']['size'];

if($img_type=="image/jpg" || $img_type=="image/png" || $img_type=="image/jpeg" || $img_type=="image/gif"){
		       	$destination = "uploads/image/".$img_name;
		       	$msg="Image";
			}
		
		else if($img_type=="application/pdf"){
			    $destination = "uploads/pdf/".$img_name;
			    $msg="Pdf";
			 }
		else{
	           $destination = "uploads/document/".$img_name;
	           $msg="Document";
	        }


	move_uploaded_file($_FILES['img']['tmp_name'], $destination);
    echo $msg." "."uploaded";
    header("location:view.php");


 ?>



<!-- 
// second method
// if($img_type=="image/jpg" || $img_type=="image/png" || $img_type=="image/jpeg" || $img_type=="image/gif"){
// 		       	$destination = "uploads/image/".$img_name; 
// 		       	upload($destination,'Image');  
// 			}
		
// 		else if($img_type=="application/pdf"){
// 			    $destination = "uploads/pdf/".$img_name;
// 			    upload($destination,'Pdf');
// 			 }
// 		else{
// 	           $destination = "uploads/document/".$img_name;
// 	           upload($destination,'Document');
// 	        }

// function upload($destination,$msg)
// {
// 	move_uploaded_file($_FILES['img']['tmp_name'], $destination);

// 	echo $msg." "."uploaded";
// }
 -->


<!-- // Lengthy one
// 
// $destination2= "uploads/document/".$img_name;
// $destination3 = "uploads/pdf/".$img_name;

// 		if($img_type=="image/jpg" || $img_type=="image/png" || $img_type=="image/jpeg" || $img_type=="image/gif"){
// 			   if(move_uploaded_file($img_tmp_name, $destination1)) {
// 				echo "Image Uploaded";
// 				echo "<img src = '$destination' height='200'>";
// 			}
// 		}
// 		else if($img_type=="application/pdf"){
// 			   if(move_uploaded_file($img_tmp_name, $destination3)) {
// 				echo "pdf Uploaded";
// 			}
// 		}

// 		else{
// 			if(move_uploaded_file($img_tmp_name, $destination2)) {
// 				echo "document Uploaded";
// 		    } }
 -->