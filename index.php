<?php 

	$cantidad = isset($_POST["cantidad"])?$_POST["cantidad"]:0;
	$valor = isset($_POST["valor"])?$_POST["valor"]:0;
 ?>
 


 <!DOCTYPE html>
 <html>
 <head>
 	
 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>

 	<title>
 		<!--Mochila-->
 	</title>
 </head>
 <body background="fondo2.jpg">
 	<p style="color:#FFFFFF";>
 	<h1><strong>Mochila</strong></h1>


 	<form action="Cant_obj.php" name="cantidad" id= "cantidad" value="cantidad" method="post">
 		Ingresa la cantidad de objetos
 		<input type="text" name="cantidad" id="cantidad" value=""><br/><br/><br/>
 		<!-- <button type="button" onclick="validar()"  class="btn btn-danger">Aceptar</button> -->
 		<!--<input type="submit" name="aceptar">-->

 	<!--<form action="Cant_obj.php" name="cantidad" id= "cantidad" value="cantidad">-->
 		Ingresa la capacidad de la mochila
 		<input type="text" name="capacidad" id="capacidad" value=""><br/><br/>
 		<!-- <button type="button" onclick="validar()"  class="btn btn-danger">Aceptar</button> -->
 		<!--<input type="submit" name="aceptar">-->
 		<div class="col-sm-5">
 			<input type="submit" name="aceptar">
 		<!--<button type="button" onclick="submit"  class="btn btn-danger" >Enviar</button>-->
 		</div>

 </p>
 </body>

  <script type="text/javascript">
 	  function validar()
 	  {
 	  	   if ($("#dato_a").val() == '')
 	  	   {  alert('Ingrese el valor de a');
 	  	      return;
 	  	   }
 	  	   if ($("#dato_b").val() == '')
 	  	   {  alert('Ingrese el valor de b');
 	  	   	  return;
 	  	   }
 	  	   $("#formsuma").submit();
 	  }
 </script>

 </html>