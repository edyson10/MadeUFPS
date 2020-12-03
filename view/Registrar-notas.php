<?php 

session_start();
$codigo = $_SESSION['codigo'];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Registrar notas</title>
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
                        <form class="user" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Subir notas</h2>
                                        <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Seleccionar la materia a calificar</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <select id="buscarMateria" name="buscarMateria" class="form-control">
                                                    <option value="Seleccione">Seleccione materia</option>
                                                    <?php
                                                    try {
                                                        require_once '../controller/conexion.php';
                                                        $codigo = "1151464";
                                                        $sql = "SELECT id_curso, nombre FROM curso WHERE docente = '$codigo'";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage();
                                                    }
                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['id_curso'] ?>"><?php echo $estudiante['id_curso'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-danger btn-sm">Cargar notas</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>C&oacute;digo</th>
                                                    <th>Nombre</th>
                                                    <th>Nota</th>
                                                    <th >Ver</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                try {
                                                    require_once '../controller/conexion.php';
                                                    if (empty($_POST['buscarMateria'])) { ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php } else {
                                                        $materia = $_POST['buscarMateria'];
                                                        $sql = "SELECT persona.codigo, persona.nombre, grupo_alumno.nota from persona inner join grupo_alumno 
                                                            on persona.codigo = grupo_alumno.id_alumno inner join curso on grupo_alumno.id_curso = curso.id_curso where curso.id_curso = '$materia'";
                                                        $resultado = $conexion->query($sql);

                                                        while ($estudiante = $resultado->fetch_assoc()) { ?>
                                                            <tr>
                                                                <td><?php echo $estudiante['codigo'] ?></td>
                                                                <td><?php echo $estudiante['nombre'] ?></td>
                                                                <td><?php echo $estudiante['nota'] ?></td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <div class="col-md-3">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar nota">
                                                                                <i class="zmdi zmdi-edit"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-6"></div>
                                                                        <div class="col-md-3"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                <?php }
                                                    }
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
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; <script>
                                            document.write(new Date().getFullYear());
                                        </script><a href="https://ww2.ufps.edu.co/" target="_blank"> UFPS</a> | Todos los derechos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
</body>

</html>
<!-- end document-->