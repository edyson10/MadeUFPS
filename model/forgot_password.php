<?php

require_once '../controller/conexion.php';

try {
    if (isset($_POST['emailForgot']) && !empty($_POST['emailForgot'])) {
        $pass = mt_rand(10000, 9999999);
        $mail = $_POST['emailForgot'];

        //Conexion con la base
        //$conn = new mysqli("localhost", "root", "", "practicas");
        //Conexion servidor UFPS
        //$conn = new mysqli("localhost","practic_admin","soft_2020","practic_bd");

        // Check connection
        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
        }

        $sql = "UPDATE persona SET codigo = '$pass' WHERE correo = '$mail'";

        if ($conexion->query($sql) === TRUE) {
            //echo "usuario modificado correctamente ";
            $to = $_POST['emailForgot'];
            $subject = "Restablecimiento de clave personal - Portal web MADEUFPS";
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $message = '
            <table style="padding:50px 0;background:url("https://ci5.googleusercontent.com/proxy/Pb84BkKB_gvGG5y6BXE7JCLRYvIJXf0PL_2i290Ad7KQI4qcCGumBuqGlcu63yh2qjAXssbAQvbekXTSjuVvwgovdg=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/grid.png")" width="100%"
                cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
                <tbody>
                    <tr>
                        <td>
                            <table style="border-radius:20px 20px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%">
                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="96%" valign="top" align="left">
                                                                                            <div>
                                                                                                <a href="https://divisist2.ufps.edu.co" style="color:#68696a;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://divisist2.ufps.edu.co&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNHs8ojkcem6sJDkiwPeMZyvA3X06w"><img src="https://ci3.googleusercontent.com/proxy/K2Yv_BQkcjejCAYmX5H448c6B4zRTO_3j-cwrrm2yBVtDevDcL75JTrdZdx4JUso5LBa-1mzfsxDBLBMpBVVx-t41NTvweNR0FuQew=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/ufps_logo_256.jpg"
                                                                                                        class="CToWUd" width="300" height="160"></a>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="4%">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="text-align:center"><br>
                                                            <hr style="border-top:1px solid #cccccc" width="85%"><br></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="10%">&nbsp;</td>
                                                        <td style="font-family:Verdana,Geneva,sans-serif;color:#68696a;font-size:12px;line-height:20px" width="80%" valign="top" align="justify">
                                                            <p>Usted ha solicitado por medio del portal web <strong> MadeUFPS</strong> el restablecimiento de su contrase&ntilde;a.</p>
                                                            <p>Su contrase&ntilde;a ha sido cambiada, por favor ingrese al sisema y modifique nuevamente su contrase&ntilde;a.</p>
                                                            <p><strong>Su nueva contraseña es: ' . $pass . '</strong></p>
                                                            <p style="margin-bottom:0px"><b>Por favor no responder este correo.</b></p>
                                                        </td>
                                                        <td width="10%">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://ci6.googleusercontent.com/proxy/fs2AHz4ncxJTX9HKPprTOGVJQaLECHEG2_cnkBGVmTydxRWVBWazd12othcLnkRd7iXaL70hOugSkpYSfewC4RSk4GsOcTyV=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/lineabaja.jpg" style="display:block"
                                                alt="" class="CToWUd" width="630" height="2" border="0"></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="background-color:#aa1916;;background-size:100% 100%;border-radius:0px 0px 20px 20px"
                                                width="100%" height="70px" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" align="right"><br>
                                                            <font style="font-family:"Myriad Pro",Helvetica,Arial,sans-serif;color:#FFFFFF;font-size:11px">
                                                                <strong>Avenida Gran Colombia No. 12E-96 Barrio Colsag, San Jos&eacute; de C&uacute;cuta - Colombia.<br> Tel&eacute;fono (057)(7) 5776655</strong></font>
                                                        </td>
                                                        <td width="4%" align="right"><br>
                                                            <a href="https://www.facebook.com/UFPS-C=C3=BAcuta-553833261409690/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/UFPS-C%3DC3%3DBAcuta-553833261409690/&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNHR2ex-dWm5N-ZL5S2er-bfpMxfkw"><img src="https://ci3.googleusercontent.com/proxy/QXm52O5uS77Im4Xscamgp_oP73q2jx4QhqqvCxMSa1j954y7B8EHuh-mvpTI_Hvb6zl7pxGaL7fGLoPEbY3GJ_Y=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/fb.png" alt="facebook"
                                                                    class="CToWUd" width="30" height="30" border="0"></a>
                                                        </td>
                                                        <td width="5%" align="center"><br>
                                                            <a href="https://twitter.com/UFPSCUCUTA" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/UFPSCUCUTA&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNFeeF13YWdrtx-Luy3Dx1WqPJVMTg"><img src="https://ci4.googleusercontent.com/proxy/o6xFG-QJoaHuNd1O3N3bC-_V_Pot5OBFkO2_WLzgrhdJsPGRFHvSwtX_Y_5bB4tzxxrndUz-zR4hcC5Ar3ruzfE=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/tw.png" alt="twitter"
                                                                    class="CToWUd" width="30" height="30" border="0"></a>
                                                        </td>
                                                        <td width="4%" align="left"><br>
                                                            <a href="http://www.youtube.com/user/UFPSCUCUTA/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.youtube.com/user/UFPSCUCUTA/&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNEEaL9zSn_q2oc3PZxf6VrUQNxNaw"><img src="https://ci6.googleusercontent.com/proxy/3Cb_WFVp3m42Nnnq4w7aF_2WvpeUPEcusYltHTrhRlqUpmB9g6zR1Svn823_KSP2BbLb1jX5yekUPwz7zTFJl3s=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/yt.png" alt="linkedin"
                                                                    class="CToWUd" width="30" height="30" border="0"></a>
                                                        </td>
                                                        <td width="5%"><br>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="yj6qo"></div>
            <div class="adL"></div>';

            mail($to, $subject, $message, $cabeceras);
            $respuesta = array('respuesta' => 'exito');
            echo json_encode($respuesta);
        } else {
            $respuesta = array('respuesta' => 'error');
            echo json_encode($respuesta);
            echo "Error modificando: " . $conexion->error;
        }
    } else
        echo 'Informacion incompleta';
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
