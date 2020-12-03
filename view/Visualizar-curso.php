<?php

session_start();
$codigo = $_SESSION['codigo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Visualizar cursos</title>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU DESKTOP-->
        <?php require_once 'menu.php'; ?>
        <!-- MENU DESKTOP-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php require_once 'nav.php'; ?>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Visualizar cursos</h2>
                                    <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>C&oacute;digo</th>
                                                <th>Nombre</th>
                                                <th>Docente</th>
                                                <th>N&uacute;mero de estudiantes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try {
                                                require_once '../controller/conexion.php';
                                                $sql = "SELECT curso.id_curso, curso.nombre, persona.nombre AS docente, curso.num_estudiantes FROM curso INNER JOIN persona 
                                                ON persona.codigo = curso.docente ORDER BY curso.id_curso ASC";
                                                $resultado = $conexion->query($sql);
                                                while ($estudiante = $resultado->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $estudiante['id_curso'] ?></td>
                                                        <td><?php echo $estudiante['nombre'] ?></td>
                                                        <td><?php echo $estudiante['docente'] ?></td>
                                                        <td><?php echo $estudiante['num_estudiantes'] ?></td>
                                                    </tr>
                                            <?php }
                                            } catch (Exception $e) {
                                                $error = $e->getMessage()();
                                            }
                                            mysqli_close($conexion);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; <script>
                                            document.write(new Date().getFullYear());
                                        </script><a href="https://ww2.ufps.edu.co/" target="_blank">UFPS</a> | Todos los derechos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php require_once 'footer.php'; ?>
</body>

</html>