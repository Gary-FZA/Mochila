<?php 
	$capacidad = $_POST['c'];
	$nvalor = $_POST['n'];
	$valor = $_POST['valor'];
	$peso = $_POST['peso'];
	$result = mochila($capacidad, $peso, $valor, $nvalor);
	//$nvalor=$_POST['nvalor'];
	//$valor=(array)$_POST['valor[]'];
	//$peso=(array)$_POST['peso[]'];
	//$capacidad=$_POST['capacidad'];
 ?>

 <?php

function mochila($capacidad, $peso, $valor, $nvalor)
{
	$K = array();

	for ($i = 0; $i <= $nvalor; ++$i)
	{
		for ($j = 0; $j <= $capacidad; ++$j)
		{
			if ($i == 0 || $j == 0)
				$K[$i][$j] = 0;
			else if ($peso[$i - 1] <= $j)
				$K[$i][$j] = max($valor[$i-1] + $K[$i-1][$j- $peso[$i-1]], $K[$i-1][$j]);
			else
				$K[$i][$j] = $K[$i-1][$j];
		}
	}

	return $K[$nvalor][$capacidad];
}

//echo "$result";
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
	
	<?php 
		echo'<br>';
		echo '<div class="center"> Valor máximo obtenido: '. $result.' </div>';
	 ?>
	
</body>
</html>