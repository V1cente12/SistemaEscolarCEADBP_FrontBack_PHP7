<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<title>creacion de un contador de visitas		
		
	</title>
	</head>
<body>
	<?php
	$cuenta="visitas.txt";
	function contador($cuenta)
	{
		$fp=fopen($cuenta, "r");
		$num=fgets($fp,5);
		$num=$num+1;
		print "numero de visitas: ";
		echo $num;
		exec("rm-rf $cuenta");
		exec("echo $num >$cuenta");

	}
	if(!file_exists($cuenta))
	{
		exec("echo 1>$cuenta");
	}
	contador($cuenta);
	?>
</body>

</html>
