<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../PROYECTO/css/estilos.css">

	<title>creacion de un contador de visitas		
		
	</title>
	</head>
<body>
	<h3>resumen de las visitas de la web</h3>
	<?php
	require_once 'includes/header.php';

	echo "Las visitas en la pagina de INGLES son: ";
	include("PROYECTO/visitas1.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de ELECTRONICA son:";
	include("PROYECTO/visitas2.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de CONTABILIDAD son:";
	include("PROYECTO/visitas3.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de DISEÑO GRAFICO son:";
	include("PROYECTO/visitas4.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de BELLEZA INTEGRAL son:";
	include("PROYECTO/visitas5.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de GASTRONOMIA son:";
	include("PROYECTO/visitas6.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de SASTRERIA Y CONFECCION TEXTIL son:";
	include("PROYECTO/visitas7.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de SECRETARIADO EJECUTIVO son:";
	include("PROYECTO/visitas8.txt");
	echo "<hr>";
	echo "<br>";
	echo "Las visitas en la pagina de SISTEMAS COMPUTACIONALES son:";
	include("PROYECTO/visitas9.txt");
	echo "<hr>";
	echo "<br>";
	//grafico
	echo "<hr size=8 color=ffffff>";
	$archivo1="PROYECTO/visitas1.txt";
	$archivo2="PROYECTO/visitas2.txt";
	$archivo3="PROYECTO/visitas3.txt";
	$archivo4="PROYECTO/visitas4.txt";
	$archivo5="PROYECTO/visitas5.txt";
	$archivo6="PROYECTO/visitas6.txt";
	$archivo7="PROYECTO/visitas7.txt";
	$archivo8="PROYECTO/visitas8.txt";
	$archivo9="PROYECTO/visitas9.txt";

	$abre1=fopen($archivo1, "r");
	$abre2=fopen($archivo2, "r");
	$abre3=fopen($archivo3, "r");
	$abre4=fopen($archivo4, "r");
	$abre5=fopen($archivo5, "r");
	$abre6=fopen($archivo6, "r");
	$abre7=fopen($archivo7, "r");
	$abre8=fopen($archivo8, "r");
	$abre9=fopen($archivo9, "r");

	$total1=fread($abre1, filesize($archivo1));
	$total2=fread($abre2, filesize($archivo2));
	$total3=fread($abre3, filesize($archivo3));
	$total4=fread($abre4, filesize($archivo4));
	$total5=fread($abre5, filesize($archivo5));
	$total6=fread($abre6, filesize($archivo6));
	$total7=fread($abre7, filesize($archivo7));
	$total8=fread($abre8, filesize($archivo8));
	$total9=fread($abre9, filesize($archivo9));

	$visitas=$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9;

	$por1=$total1*100/$visitas;
	$por1=intval($por1,10);
	$por2=$total2*100/$visitas;
	$por2=intval($por2,10);
	$por3=$total3*100/$visitas;
	$por3=intval($por3,10);
	$por4=$total4*100/$visitas;
	$por4=intval($por4,10);
	$por5=$total5*100/$visitas;
	$por5=intval($por5,10);
	$por6=$total6*100/$visitas;
	$por6=intval($por6,10);
	$por7=$total7*100/$visitas;
	$por7=intval($por7,10);
	$por8=$total8*100/$visitas;
	$por8=intval($por8,10);
	$por9=$total9*100/$visitas;
	$por9=intval($por9,10);

	echo "INGLES:<b>$total1</b> visitas - <b>$por1 %</b>";
	echo "<img height=15 width=$por1 src=PROYECTO/img/ico.png><br>";
	echo "ELECTRONICA:<b>$total2</b> visitas - <b>$por2 %</b>";
	echo "<img height=15 width=$por2 src=PROYECTO/img/ico.png><br>";
	echo "CONTABILIDAD:<b>$total3</b> visitas - <b>$por3 %</b>";
	echo "<img height=15 width=$por3 src=PROYECTO/img/ico.png><br>";
	echo "DISEÑO GRAFICO:<b>$total4</b> visitas - <b>$por4 %</b>";
	echo "<img height=15 width=$por4 src=PROYECTO/img/ico.png><br>";
	echo "BELLEZA INTEGRAL:<b>$total5</b> visitas - <b>$por5 %</b>";
	echo "<img height=15 width=$por5 src=PROYECTO/img/ico.png><br>";
	echo "GASTRONOMIA:<b>$total6</b> visitas - <b>$por6 %</b>";
	echo "<img height=15 width=$por6 src=PROYECTO/img/ico.png><br>";
	echo "CONFECCION TEXTIL:<b>$total7</b> visitas - <b>$por7 %</b>";
	echo "<img height=15 width=$por7 src=PROYECTO/img/ico.png><br>";
	echo "SECRETARIADO EJECUTIVO:<b>$total8</b> visitas - <b>$por8 %</b>";
	echo "<img height=15 width=$por8 src=PROYECTO/img/ico.png><br>";
	echo "SISTEMAS COMPUTACIONALES:<b>$total9</b> visitas - <b>$por9 %</b>";
	echo "<img height=15 width=$por9 src=PROYECTO/img/ico.png><br>";

	echo"<BR>";

	$todo=$por1+$por2+$por3+$por4+$por5+$por6+$por7+$por8+$por9;

	echo "<hr size=2 color=ffffff width=30% align=letf>";
	echo "total visitas : <b>$visitas</b> de un <b>$todo % </b>";
	echo "<img height=15 width=$todo src=PROYECTO/img/ico.png>";
	?>
	
</body>

</html>
<?php
    require_once 'includes/footer.php';
?>