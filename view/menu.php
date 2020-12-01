<?php

$rol = $_SESSION['rol'];

?>
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <?php if ($rol == '1') { ?>

                <?php } else if ($rol == '2') { ?>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Curso</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Registrar-notas.php">Notas</a>
                            </li>
                            <li>
                                <a href="Cargar-actividad.php">Actividad</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>Estudiante</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Registrar-estudiante.php">Registrar estudiante</a>
                            </li>
                            <li>
                                <a href="Asignar-estudiante.php">Asignar estudiante</a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($rol == '3') { ?>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Mis cursos</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Estudiante.php">Notas</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <?php if ($rol == '1') { ?>
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Curso</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="Registrar-curso.php">Registrar curso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>Docente</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Registrar-docente.php">Registrar docente</a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($rol == '2') { ?>
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Curso</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="Registrar-notas.php">Notas</a>
                            </li>
                            <li>
                                <a href="Cargar-actividad.php">Actividad</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>Estudiante</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Registrar-estudiante.php">Registrar estudiante</a>
                            </li>
                            <li>
                                <a href="Asignar-estudiante.php">Asignar estudiante</a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($rol == '3') { ?>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Mis cursos</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="Estudiante.php">Notas</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->