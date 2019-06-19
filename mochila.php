<?php 

 $a = isset($_POST["dato_a"])?$_POST["dato_a"]:0;
 $b = isset($_POST["dato_a"])?$_POST["dato_a"]:0;
 $n = isset($_POST["n"])?$_POST["n"]:0;
 $Aceptar=$n;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>

 	<title>
 		Mochila
 	</title>
 </head>
 <body>
 	<style >
 		.main{
 			background-image: url(../fondo.jpg);

 		}
 	</style>

 	
 	<!--<style >
 		.main{
 			background-image: url(../fondo.jpg);
 			background-image: url(https://www.logaster.com.es/blog/wp-content/uploads/2019/01/4-min.jpg);

 		}
 	</style>   -->
 		<h1>
 			<strong>
 				<sub>
 				Mochila
 				</sub>
 			</strong>
 	</h1>
 	<label for="n" class="col-sm-2 control-label">Ingrese cantidad de objetos:</label>
 	<input class="form-control" type="text" name="n" id="n" value="0">
 	 <button type="button" onclick="validar()"  class="btn btn-danger">Aceptar</button>
 	<?php 

			     for($i = 1 ; $i<$Aceptar ; $i++)	
			     {	 	
	?>
	<div class="form-group">
			 		<label for="dato_a" class="col-sm-2 control-label">Objeto 1</label>
			 		<div class="col-sm-10">
			      	    <input class="form-control" type="text" name="dato_<?=$i?>" id="dato_<?=$i?>" value="<?=$a ?>">
			        </div>
			    </div>
			    <div class="form-group">
			    	<label for="dato_b" class="col-sm-2 control-label">Valor del objeto <?php echo $dato_a[i]; ?></label>
			    	<div class="col-sm-10">
			       	   <input class="form-control" type="text" name="dato_b" id="dato_b" value="<?=$b ?>">
			        </div>
			     </div>
	 <?php
				}
				?>
 </body>
 </html>