<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="view/css/font-face.css" rel="stylesheet" media="all">
    <link href="view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="view/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="view/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="view/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="view/css/theme.css" rel="stylesheet" media="all">

    <link href="view/css/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="view/images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="model/login_model.php" method="post" name="FormLogin" id="FormLogin">
                                <div class="form-group">
                                    <label>C&oacute;digo</label>
                                    <input class="au-input au-input--full" type="number" id="codigo" name="codigo" placeholder="123456" required>
                                </div>
                                <div class="form-group">
                                    <label>Contrase&ntilde;a</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="******" required>
                                </div>
                                <div class="form-group">
                                    <label>Rol</label>
                                    <select id="tipo" name="tipo" class="form-control">
                                        <option value="Seleccione">Seleccione el rol</option>
                                        <option value="Director">Director</option>
                                        <option value="Docente">Docente</option>
                                        <option value="Estudiante">Estudiante</option>
                                    </select>
                                </div>
                                <div class="login-checkbox">
                                    <label></label>
                                    <label>
                                        <a href="#">¿Olvidaste su contrase&ntilde;a?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Iniciar sesi&oacute;n</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="view/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="view/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="view/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="view/vendor/slick/slick.min.js"></script>
    <script src="view/vendor/wow/wow.min.js"></script>
    <script src="view/vendor/animsition/animsition.min.js"></script>
    <script src="view/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="view/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="view/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="view/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="view/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="view/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="view/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="view/js/main.js"></script>

    <!-- Script añadidos -->
    <script src="view/js/sweetalert2.min.js"></script>

    <script src="view/js/login.js"></script>
</body>

</html>
<!-- end document-->