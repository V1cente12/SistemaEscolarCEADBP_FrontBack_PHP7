<?php
    session_start();
    if(!empty($_SESSION['active'])) {
        header('Location: administrador/');
    } else if(!empty($_SESSION['activeP'])) {
        header('Location: profesor/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css" />
    <link href="portal/css/style.css" rel="stylesheet" /><script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script><script src="js/modernizr.js"></script><script src="js/bootstrap.min.js"></script><script src="js/main.js"></script>

   
    
    
    <title>INGRESO AL SISTEMA</title>
</head>
<body>
<header class="full-reset header">
    
    <div class="full-reset logo">
        <span class="hidden-lg hidden-md">CEA</span> 
        
    </div>
    <nav class="full-reset navigation">
    <ul class="full-reset list-unstyled">
        <li><a href="portal/index.html">PRINCIPAL</a></li>
        <li><a href="portal/institucion.html">CEA</a></li>
        <li><a href="portal/bachilleratos.html">ESPECIALIDADES</a></li>
        <li><a href="portal/galeria.html">ASISTENCIA SALESIANA</a></li>
        <li><a href="../../moodle/login/index.php">AULA VIRTUAL</a></li>
        <li><a href="#">LOGIN</a></li>
    </ul>
    </nav>
    <a href="#" class="hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
    </header>
    <header class="main-header">

            <div class="main-cont">
                <div class="desc-header">
                    <img src="images/descarga.jpg" alt="image school">
                   
                </div>
            </div>
            <div class="cont-header">
                <h1>Bienvenid@</h1>
                
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrador</a>
                        </li>
                         <!--<li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profesor</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="true">Estudiante</a>
                        </li>-->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" onsubmit="return validar()">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                                <label for="password">Contraseña</label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña">
                                <div id="messageUsuario"></div>
                                <button id="loginUsuario" type="button">INICIAR SESION</button>
                            </form>
                        </div>
                       <!--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="" onsubmit="return validar()">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuarioProfesor" id="usuarioProfesor" placeholder="Cedula">
                                <label for="password">Contraseña</label>
                                <input type="password" name="passProfesor" id="passProfesor" placeholder="Contraseña">
                                <div id="messageProfesor"></div>
                                <button id="loginProfesor" type="button">INICIAR SESION</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" onsubmit="" onclick="location.href='../moodle/login/index.php'">
                                <br>
                                <br>
                                <button id="loginProfesor" type="button" href="">INGRESAR</button>
                                <br>
                                <br>
                            </form>
                        </div>-->
                        
                    </div>


    
            </div>
        
    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>