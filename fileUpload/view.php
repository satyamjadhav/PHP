<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Image view</title>
    <style type="text/css">
        .container{
            width: 100vw;
        }
        .container img{
            width:300px;
            height:200px;
        }
    </style>
</head>
<body>
    <h2 style="padding-left:600px;">VIEW DATA</h2>
    <div class="container" style="border:1px solid black">
      <?php 
          $files=glob("uploads/image/*.*");
          // print_r($files);
          // echo "<pre>";
          for ($i = 0; $i < count($files);$i++) {
              $image = $files[$i];
              echo "<div style='width:300px;height:200px;float:left;border:1px solid black;margin:10px 10px'>";
              echo '<img src="'.$image.'" alt="Random image">'     .    "<br><br>";
              echo "</div>";
    // echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    
}
?>   
   </div>     
    </div>
</body>
</html>


