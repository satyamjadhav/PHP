
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Bike</title>
 	<style type="text/css">
 		.container{
 			width:100%;
 			height:auto;
 		}
 		.box{
 			float:left;
 			width:60px;
 			height:auto;
 			margin-left:30px;
 			margin-top:550px;
 		}
 		.box button{
 			width:70px;
 			height:30px;
 			background-color:green;
 			color: white;
 			border-radius:30px;
 		}
 		.box button:hover{
 			transform:scale(1.1);
 			border: green;
 		}			
 	</style>
 	<script type="text/javascript">
 		
 	</script>
 </head>
 <body>
      <div class="container">
          <?php 
       class bike{
			     public $name;
			     public $cc;
			     public $model;
			     public function start()
			     {
			         echo "Bike started";
			     }
			     public function stop()
			     {
			        echo "bike stopped";
			     }
			     public function ride()
			     {
			     	echo "I am riding bike";
			     }
			   }
               $satyam = new bike();
			   $satyam->name="pulsar";
			   $satyam->cc="220";
			   $satyam->model="220F";


            ?>

  
           
           <div class="box">
      		<button>START</button>
      	</div>
  
      	<div class="box">
      		<button>STOP</button>
      	</div>
      	<div class="box">
      		<button>RIDE</button>
      	</div>
      </div>
 </body>
 </html>