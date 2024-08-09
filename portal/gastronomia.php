<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institucion</title>
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" /><script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script><script src="js/modernizr.js"></script><script src="js/bootstrap.min.js"></script><script src="js/main.js"></script>
</head>
<body>
	<?php
	$cuenta="visitas6.txt";
	function contador($cuenta)
	{
		$fp=fopen($cuenta, "r");
		$num=fgets($fp,5);
		$num=$num+1;
		
		exec("rm-rf $cuenta");
		exec("echo $num >$cuenta");

	}
	if(!file_exists($cuenta))
	{
		exec("echo 1>$cuenta");
	}
	contador($cuenta);
	?>
<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<header class="full-reset header">
		
	<div class="full-reset logo">
		<span class="hidden-lg hidden-md">CEA</span> 
		<span class="hidden-xs hidden-sm">CEA DON BOSCO "D"</span>
	</div>
	<nav class="full-reset navigation">
	<ul class="full-reset list-unstyled">
	<li><a href="index.html">PRINCIPAL</a></li>
	<li><a href="institucion.html">CEA</a></li>
	<li><a href="bachilleratos.html">ESPECIALIDADES</a></li>
	<li><a href="galeria.html">ASISTENCIA SALESIANA</a></li>
	<li><a href="../../moodle/login/index.php">AULA VIRTUAL</a></li>
    <li><a href="../index.php">LOGIN</a></li>
</ul>
</nav>
<a href="#" class="hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
</header>

<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
<div class="container" style="">
<div class="row" style="">
<section class="col-xs-12 col-sm-8 col-md-9 info-section-ins" style="">
<article class="full-reset" id="b-asistente" style="">
<div class="page-header" style="margin-bottom: 40px;">
</div>

<figure style="background-color: rgb(255, 255, 255);"><img alt="" class="img-responsive img-rounded center-box" src="assets/img/gastronomia/img-gast.jpg" style="width: 960px; height: 540px;" /></figure>
<BR>
<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles">GATRONOMIA</div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
Los nuevos profesionales en el idioma ingl&eacute;s contaran con conocimientos t&eacute;cnicos, concisos y s&oacute;lidos del idioma, de modo que desarrollen las habilidades necesarias para competir en un mundo globalizado, en un plazo de tiempo menor al que dura una carrera universitaria completaria, incorpor&aacute;ndose a la vida laboral. Su formaci&oacute;n lo habilitar&aacute; para desenvolverse en distintos &aacute;mbitos de la sociedad para establecer una comunicaci&oacute;n oral y escrita del idioma ingl&eacute;s.</p>

</div>
</DIV>

<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >NIVEL I</h4>

                  <p>COCINA NACIONAL I-II</p>
                    <p>COCINA INTERNACIONAL I-II</p>
                    <p>EMPRENDIMIENTO I</p>
                    <p>SALUD-HIGIENE Y CONSERCACION DE ALIMENTOS</p>
                    <P>VARIEDAD DE ENTRADAS Y ENSALADAS</P>
                   
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">NIVEL 2</h4>
 <p>COCINA INTERNACIONAL III</p>
 <p>EMPRENDIMIENTO II</p>
 <p>EVENTOS CATERING Y PROROCOLO</p>
 <p>HELADOS Y POSTRES</p>
 <P>NUTRICION Y TECNICAS CULINARIAS</P>
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">NIVEL 3</h4>
 <P>CALCULOS Y MEDIDAS</P>
 <p>EMPRENDIMIENTO</p>
 <p>PANADERIA I</p>
 <p>RESPOSTERIA FINA Y DECORADO I Y II</p>
 <p>RESPOSTERIA I Y II</p>
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">NIVEL 4</h4>
<p>ADMINISTRACION GENERAL Y HOTELERIA</p>
<p>ALTA PASTELERIA</p>
<p>PANADERIA II CHOCOLATERIA</p>
<p>PASTELERIA I Y II</p>
<p>PLAN DE NEGOCIOS</p>
</div>
</div>

</div>
						
</article>
</section>
</div>
</div>
</section>

<footer class="full-reset footer">
<div class="full-reset" style="padding: 15px 0;">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">Visitenos en</h4>

<p class="text-center">CEA DON BOSCO &ldquo;D&rdquo; EL PRADO Calle Tihuanaco N&deg;8, frente Hotel Europa.</p>
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">Contactenos</h4>

<p class="text-center">2 311775 - 2 312866<br />
Correo Electr&oacute;nico: correo@hotmail.com</p>
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles subtitles-footer">Siguenos en</h4>

<ul class="list-unstyled links-footer">
	<li><a class="open-link-newTab" href="#!">&nbsp; Facebook</a></li>
	<li><a class="open-link-newTab" href="#!">&nbsp; Twitter</a></li>
	<li><a class="open-link-newTab" href="#!">&nbsp; Google+</a></li>
</ul>
</div>

<div class="col-xs-12">
<div class="full-reset footer-copyright">Vctny</div>
</div>
</div>
</div>
</div>
</footer>
</body>
</html>