 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/user.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['nombre']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['nombre_rol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
      <li><a class="app-menu__item" href="lista_usuarios.php"><i class="app-menu__icon fas fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
      <li><a class="app-menu__item" href="lista_profesores.php"><i class="app-menu__icon fas fa-chalkboard-teacher"></i><span class="app-menu__label">Profesores</span></a></li>
      <li><a class="app-menu__item" href="lista_alumnos.php"><i class="app-menu__icon fas fa-user-graduate"></i><span class="app-menu__label">Alumnos</span></a></li>
      <li><a class="app-menu__item" href="lista_grados.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Especialidades</span></a></li>
      <li><a class="app-menu__item" href="lista_aulas.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Modulos</span></a></li>
      <li><a class="app-menu__item" href="lista_materias.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Contenido por Modulo</span></a></li>
      <!--<li><a class="app-menu__item" href="lista_periodos.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Periodos</span></a></li>-->
      <li><a class="app-menu__item" href="lista_actividad.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Actividades</span></a></li>
      <!--<li><a class="app-menu__item" href="lista_profesor_materia.php"><i class="app-menu__icon fas fa-list-alt"></i></i><span class="app-menu__label">Profesor Materia</span></a></li>
      <li><a class="app-menu__item" href="lista_alumno_profesor.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Alumno Profesor</span></a></li>-->
      <li><a class="app-menu__item" href="contador2.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Actividad Portal Web</span></a></li>
      
        <li><a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">Salir</span></a></li>
      </ul>
    </aside>