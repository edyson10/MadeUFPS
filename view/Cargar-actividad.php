<?php

session_start();
$codigo = $_SESSION['codigo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Cargar actividad</title>
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
                                    <h2 class="title-1">Cargar actividades</h2>
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
                                        Actividades
                                    </div>
                                    <form name="FormCargaCurriculo" id="FormCargaCurriculo">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Archivo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="microcurriculo" name="microcurriculo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select id="materiaActividad" name="materiaActividad" class="form-control">
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
                                            <div class="form-group">
                                                <select id="actividad" name="actividad" class="form-control">
                                                    <option value="Seleccione">Seleccione</option>
                                                    <option value="1">Actividad 1</option>
                                                    <option value="2">Actividad 2</option>
                                                    <option value="3">Actividad 3</option>
                                                    <option value="4">Actividad 4</option>
                                                </select>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="fecha" class=" form-control-label">Fecha final</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="fecha_final" name="fecha_final" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" id="btnEnviar" class="btn btn-primary btn-sm">
                                                <i class="fa fa-upload"></i> Cargar actividad
                                            </button>
                                        </div>
                                    </form>
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