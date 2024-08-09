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
    $cuenta="visitas7.txt";
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
<h2><strong><span style="background-color:#FFFFE0;">&nbsp;<span style="color:#0000FF;">SATRERIA-CONFECCION TEXTIL</span></span></strong></h2>
</div>

<figure><img alt="bachillerato contador" class="img-responsive img-rounded center-box" src="assets/img/confeccion/img-confec.jpg" style="width: 960px; height: 540px;" /></figure>
<BR>

						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles">SASTRERIA-CONFECCION TEXTIL</div>
						  <div class="panel-body">
						    <p class="lead text-justify">	

El Profesional Técnico de Diseño de Modas, imagina, crea y propone piezas y colecciones de prendas de vestir y accesorios. Confecciona prototipos, costea el producto a confeccionar y realiza el control de calidad de la pre producción y producción. Se nutre de los avances tecnológicos y se inspira en los aportes sociales y culturales, respetando la naturaleza a través de la aplicación de la moda sostenible.
</div>
</div>

    <br >
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >NIVEL 1</h4>

                  <p>COMPUTACION BASICA Y MATEMATICA</p>
                    <p>CONFECCION DE CAMISAS Y CHAMARRAS</p>
                    <p>CONFECCION DE ROPA DE PORTAIVA</p>
                    <p>PATRONAJE DE ROPA DEPORTIVE Y CHAMARRA</p>
                   
</div>
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >NIVEL 2</h4>

                  <p>CLASIFICACION DE HILOS TELAS Y SIMBOLOGIA</p>
                    <p>CONFECCION DE FALDAS BLUSAS Y VESTIDOS</p>
                    <p>EMPRENDIMIENTO II(FUNDACIONAL II)</p>
                    <p>PATRONAJE Y CONFECCION DE ROPA NIÑOS</p>
                    <p>PATRONAJE DE FALDAS BLUSAS Y VESTIDOS</p>
</div>
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >NIVEL 3</h4>

                  <p>CONFECCION DE ABRIGOS</p>
                    <p>CONTROL DE CALIDAD</p>
                    <p>PATRONAJE DE ABRIGOS</p>
                    <p>PATRONAJE Y CONFECCION DE TRAJE DE </p>
                    <p>PRACTICA PROFESIONAL I</p>
                   
</div> 
<div class="col-xs-12 col-sm-4">
<h4 class="titles text-center" >NIVEL 4</h4>

                  <p>EL CUERPO HUMANO Y SU PROPORCION</p>
                    <p>MODA,CREATRIVIDAD Y DISEÑO DE INDUMENTARIA</p>
                    <p>PLAN DE NEGOCIOS</p>
                    <p>TECNICAS DE DIBUJO A LAPIZ,ACUARELA</p>
                    <p>TECNICAS DE DIBUJO PEILCOLORES</p>
                   
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
	<li><a class="open-link-newTab" href="https://www.facebook.com/CEA-DON-BOSCO-D-107796884132352">&nbsp; Facebook</a></li>
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