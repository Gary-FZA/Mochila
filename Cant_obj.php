<?php 
	//$cantidad = isset($_POST["cantidad"])?$_POST["cantidad"]:0;
	$n = $_POST['cantidad'];
	$c = $_POST['capacidad'];
 ?>

 <!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>

	<title></title>
</head>
<body background="fondo2.jpg">

	<div class="col-sm-offset-2 col-sm-10" >
		 	     <h1> Ingrese el Peso y valor de los objetos: </h1>
		 	</div>


	
 <?php 

 	for ($i=0; $i < $n ; $i++) { 

 ?>
	
	<!--<label for="peso" class="col-sm-2 control-label">Peso del objeto <?php echo $i+1; ?></label><br/>-->
	<form action="Algoritmo2.php" name="Algoritmo2" id= "Algoritmo2" value="Algoritmo2">

		<?php 

			$n = $_POST['cantidad'];
			$c = $_POST['capacidad'];

		 ?>

	<div class="form-group">
			    	<label for="valor" class="col-sm-4 control-label">Peso del objeto <?php echo $i+1; ?></label>
			    	<div class="col-sm-10">
			       	   <input class="form-control" type="text" name="peso" id="peso" value="">
			        </div>
			     </div>
	
	<!--<input type="text" name="peso"><br/>-->
	<!--<label for="valor" class="col-sm-2 control-label">Valor del objeto <?php echo $i+1; ?></label><br/>-->
	<div class="form-group">
			    	<label for="valor" class="col-sm-4 control-label">Valor del objeto <?php echo $i+1; ?></label>
			    	<div class="col-sm-10">
			       	   <input class="form-control" type="text" name="valor" id="valor" value="">
			        </div>
			     </div>
	
	<!--<input type="text" name="valor"><br/>-->

 <?php 

	}

  ?>
  	<input type="submit" name="aceptar">
  <?php echo "cantidad", $c; ?>
  </body>
</html>
