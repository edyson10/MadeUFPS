<?php

session_start();
$codigo = $_SESSION['codigo'];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Registrar curso</title>
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
                                    <h2 class="title-1">Registrar curso</h2>
                                    <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Registro</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre de la materia" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="codigo" name="codigo" placeholder="C&oacute;digo de la materia" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select id="materiaAsignar" name="materiaAsignar" class="form-control">
                                                    <option value="Seleccione">Seleccione el docente</option>
                                                    <?php
                                                    try {
                                                        require_once '../controller/conexion.php';
                                                        $sql = "SELECT persona.codigo, persona.nombre FROM persona INNER JOIN rol ON persona.rol = rol.id_rol where rol.nombre = 'Docente'";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage();
                                                    }
                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['codigo'] ?>"><?php echo $estudiante['codigo'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="cantidad" name="cantidad" placeholder="Cantidad de estudiantes" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-danger btn-sm">Registrar</button>
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