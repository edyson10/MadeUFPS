<?php

session_start();
$codigo = $_SESSION['codigo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Asignar estudiante</title>
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
                                    <h2 class="title-1">Asignar estudiante</h2>
                                    <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Asignar</div>
                                    <div class="card-body card-block">
                                        <form id="FormAsignarEstudiante" name="FormAsignarEstudiante" action="../model/asignarEstudiante.php" method="post">
                                            <div class="form-group">
                                                <select id="materiaAsignar" name="materiaAsignar" class="form-control">
                                                    <option value="Seleccione">Seleccione la materia</option>
                                                    <?php
                                                    try {
                                                        require_once '../controller/conexion.php';
                                                        $sql = "SELECT id_curso, nombre FROM curso ORDER BY id_curso ASC";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage();
                                                    }
                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['id_curso'] ?>"><?php echo $estudiante['id_curso'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select id="estudianteAsignar" name="estudianteAsignar" class="form-control">
                                                    <option value="Seleccione">Seleccione el estudiante</option>
                                                    <?php
                                                    try {
                                                        require_once '../controller/conexion.php';
                                                        $codigo = "1151464";
                                                        $sql = "SELECT persona.codigo, persona.nombre FROM persona INNER JOIN rol ON persona.rol = rol.id_rol where rol.nombre = 'Estudiante'";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage();
                                                    }
                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['codigo']?>"><?php echo $estudiante['codigo'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-danger btn-sm">Asignar estudiante</button>
                                            </div>
                                        </form>
                                    </div>
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