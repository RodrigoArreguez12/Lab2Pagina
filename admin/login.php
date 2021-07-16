<?php
	session_start();
session_destroy();
	
$varE = $_REQUEST['sn'];

?>

<!DOCTYPE html>
<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>

<head>
    <title>Login | Inmobiliaria UBP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://preview.colorlib.com/theme/bootstrap/login-form-18/css/A.style.css.pagespeed.cf.EsokhafFue.css">
        
        
     <link rel="icon" href="../imagenes/iconoadmin.png">

    <meta name="msapplication-config"
        content="https://getbootstrap.com//docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
</head>

<body style="zoom: 1;">

    <script>
        var b = 1;

        var a = <?php echo $varE; ?>;
        if (a === b) {
            alert('Datos Incorrectos! Intente nuevamente');
        }
    </script>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center"
                            style="background-color:#343a40;">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4" style="color:#343a40;">Administrador de Inmobiliaria UBP</h3>
                        <form class="login-form" method="POST" action="http://g2.develnet.net/db/validar.php">
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control rounded-left" placeholder="Usuario" required >
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="pass" class="form-control rounded-left" placeholder="Contraseña"
                                    required >
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="text-md-right">
                                 <!--   <a href="#" style="color:#94212c;">Olvide la Contraseña</a>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary rounded submit p-3 px-5 w-50">Ingresar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.wRxug4_Avg.js"></script>
    <script>eval(mod_pagespeed_mGxpOPO3_V);</script>
    <script>eval(mod_pagespeed_hRdA8ZBafG);</script>
    <script>eval(mod_pagespeed_jDGrFP5nZp);</script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon="{&quot;rayId&quot;:&quot;66a55e4d5883f806&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.6.0&quot;,&quot;si&quot;:10}"></script>
</body>

</html>