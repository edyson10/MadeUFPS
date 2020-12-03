<?php 

$nombre = $_SESSION['usuario'];
$correo = $_SESSION['correo'];

?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
            <form class="form-header" action="" method="POST"></form>
            <div class="header-button">
                <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                        <i class="zmdi zmdi-comment-more"></i>
                        <span class="quantity">1</span>
                        <div class="mess-dropdown js-dropdown">
                            <div class="mess__title">
                                <p>You have 2 news message</p>
                            </div>
                            <div class="mess__item">
                                <div class="image img-cir img-40">
                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                </div>
                                <div class="content">
                                    <h6>Michelle Moreno</h6>
                                    <p>Have sent a photo</p>
                                    <span class="time">3 min ago</span>
                                </div>
                            </div>
                            <div class="mess__item">
                                <div class="image img-cir img-40">
                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                </div>
                                <div class="content">
                                    <h6>Diane Myers</h6>
                                    <p>You are now connected on message</p>
                                    <span class="time">Yesterday</span>
                                </div>
                            </div>
                            <div class="mess__footer">
                                <a href="#">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $nombre; ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $nombre; ?></a>
                                    </h5>
                                    <span class="email"><?php echo $correo; ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="Perfil.php">
                                        <i class="zmdi zmdi-account"></i>Perfil</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="../model/salir.php">
                                    <i class="zmdi zmdi-power">
                                    </i>Cerrar sesi&oacute;n</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>