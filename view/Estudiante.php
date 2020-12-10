<?php

session_start();
$codigo = $_SESSION['codigo'];

require_once '../controller/conexion.php';
$sql = "SELECT cm.ruta_archivo, cm.fecha_final, cm.num_actividad FROM cargar_microcurriculo cm 
INNER JOIN curso ON cm.id_curso = curso.id_curso INNER JOIN grupo_alumno ga ON ga.id_curso = curso.id_curso 
WHERE ga.id_alumno = '$codigo' AND ga.id_curso = '12'";
$resultado = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Estudiante</title>
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
                                    <h2 class="title-1">Materias asignadas</h2>
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
                                                <th>Nota</th>
                                                <th class="text-right">Actividad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try {
                                                require_once '../controller/conexion.php';
                                                $sql = "SELECT curso.id_curso, curso.nombre, grupo_alumno.nota from curso inner join grupo_alumno on curso.id_curso = grupo_alumno.id_curso 
                                                        where grupo_alumno.id_alumno = '$codigo'";
                                                $resultado = $conexion->query($sql);
                                                while ($estudiante = $resultado->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $estudiante['id_curso'] ?></td>
                                                        <td><?php echo $estudiante['nombre'] ?></td>
                                                        <td><?php echo $estudiante['nota'] ?></td>
                                                        <td>
                                                            <div class="table-data-feature row">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-4">
                                                                    <a class="item" title="Ver actividades" data-toggle="modal" data-target="#mediumModal">
                                                                        <i class="zmdi zmdi-eye"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a class="item" title="Descargar actividad" onclick="descargar('<?php echo $codigo ?>', '<?php echo $estudiante['id_curso'] ?>')">
                                                                        <i class="zmdi zmdi-download"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            } catch (Exception $e) {
                                                $error = $e->getMessage();
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

        <!-- modal medium -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Actividades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Actividad</th>
                                                <th>Fecha final</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Actividad 1</td>
                                                <td>2020-12-09</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Descargar">
                                                            <i class="zmdi zmdi-download"></i>
                                                        </a>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                            <i class="zmdi zmdi-upload"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Actividad 2</td>
                                                <td>2020-12-12</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Descargar">
                                                            <i class="zmdi zmdi-download"></i>
                                                        </a>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                            <i class="zmdi zmdi-upload"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Actividad 3</td>
                                                <td>2020-12-24</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Descargar">
                                                            <i class="zmdi zmdi-download"></i>
                                                        </a>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                            <i class="zmdi zmdi-upload"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Actividad 4</td>
                                                <td>2020-12-31</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Descargar">
                                                            <i class="zmdi zmdi-download"></i>
                                                        </a>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                            <i class="zmdi zmdi-upload"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!--<button type="button" class="btn btn-primary">Confirm</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal medium -->
        <!-- Footer -->
        <?php require_once 'footer.php'; ?>
</body>

</html>