<?php

session_start();
$codigo = $_SESSION['codigo'];

require_once '../controller/conexion.php';
$sql = "SELECT * FROM persona WHERE codigo = '$codigo'";
$ejecutar = mysqli_query($conexion, $sql);
$row = $ejecutar->fetch_array(MYSQLI_ASSOC);
$nombre = $row['nombre'];
$documento = $row['documento'];
$codigo = $row['codigo'];
$direccion = $row['direccion'];
$telefono = $row['telefono'];
$correo = $row['correo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <!-- Title Page-->
    <title>Registrar estudiante</title>
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
                                    <h2 class="title-1">Perfil</h2>
                                    <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Datos</div>
                                    <div class="card-body card-block">
                                        <form id="FormRegistroEstudiante" name="FormRegistroEstudiante" action="../model/registroEstudiante.php" method="post">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="nombre" name="nombre" placeholder="<?php echo $nombre ?>" class="form-control" disabled>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="cedula" name="cedula" placeholder="<?php echo $documento ?>" class="form-control" disabled>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="codigo" name="codigo" placeholder="<?php echo $codigo ?>" class="form-control" disabled>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="direccion" name="direccion" placeholder="<?php echo $direccion ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="telefono" name="telefono" placeholder="<?php echo $telefono ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" id="correo" name="correo" placeholder="<?php echo $correo ?>" class="form-control" disabled>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-danger btn-sm">Actualizar</button>
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