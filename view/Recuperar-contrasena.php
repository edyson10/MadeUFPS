<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'header.php'; ?>
    <title>Recuperar contraseña</title>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form id="FormRecuperarPass" name="FormRecuperarPass" action="../model/forgot_password.php" method="post">
                                <div class="form-group">
                                    <label>Escriba el correo a recuperar</label>
                                    <input class="au-input au-input--full" type="emailForgot" name="emailForgot" placeholder="Correo electronico">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id="recuperar" name="recuperar">Recuperar</button>
                            </form>
                        </div>
                        <div class="text-center">
                            <a class="small" style="font-size: 90%; color: red;" href="../index.php">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
</body>

</html>