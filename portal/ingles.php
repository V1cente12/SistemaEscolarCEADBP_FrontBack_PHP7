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
	$cuenta="visitas1.txt";
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
<div class="container">
<div class="row">
<section class="col-xs-12 col-sm-8 col-md-9 info-section-ins">
<article class="full-reset" id="b-asistente">
<div class="page-header" style="margin-bottom:40px;">
<h2><span style="color:#0000FF;"><span style="background-color:#FFFFE0;">&nbsp; INGLES&nbsp;</span></span></h2>
</div>

<figure><img alt="bachillerato asistente" class="img-responsive img-rounded center-box" src="ingles grupo.jpg" style="width: 960px; height: 720px;" /></figure>

<br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles">IDIOMA INGLES</div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
Los nuevos profesionales en el idioma ingl&eacute;s contaran con conocimientos t&eacute;cnicos, concisos y s&oacute;lidos del idioma, de modo que desarrollen las habilidades necesarias para competir en un mundo globalizado, en un plazo de tiempo menor al que dura una carrera universitaria completaria, incorpor&aacute;ndose a la vida laboral. Su formaci&oacute;n lo habilitar&aacute; para desenvolverse en distintos &aacute;mbitos de la sociedad para establecer una comunicaci&oacute;n oral y escrita del idioma ingl&eacute;s.</p>

</div>
</div>

    <br >
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >GRAMMAR LEVEL 1</h4>

                  <p>NUCLEAR FAMILIES</p>
                    <p>COSTUMS</p>
                    <p>TOURISM AND HISTORY</p>
                    <p>BASIC COMPUTATION</p>
                   
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">GRAMMAR LEVEL 2</h4>
 <p>People and languges</p>
 <p>Money and Travel</p>
 <p>Mother Earth and Science</p>
 <p>Employment and Entrepreneurship</p>
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">GRAMMAR LEVEL 3</h4>
 <P>OVERCOMING OBSTACLES</P>
 <p>ANCESTORS AND TECHNOLOGY</p>
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">GRAMMAR LEVEL 4</h4>
<p>LEARNING AND NATURE</p>
<p>PROFESSIONAL PRACTICE 1</p>
</div>

<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center">GRAMMAR LEVEL 5</h4>
<p>ART AND COLORS</p>
<p>ACHIEVING THE FINAL GRADE</p>
<p>PROFESSIONAL PRACTICE 2</p>
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