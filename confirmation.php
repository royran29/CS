<!doctype html>
<html class="no-js" lang="">
    <head> 

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZDVN9M');</script>
<!-- End Google Tag Manager -->



        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Copa Subway</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZDVN9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
 
        <?php if ($_POST['name']) {
                $name = $_POST['name'];
            } 
            else{
                $name = 'Usuario';
            }?>

        <!-- Menu -->
        <label>
            <input type="checkbox">
            <span class="menu ">
                <span class="hamburger"></span>
            </span>
            <ul class="no-display">
                <li><a href="index.html"> Inicio</a></li>
                <li><a href="form.html"> Participar</a></li>
                <li><a href="info.html"> Premiación</a></li>
                <li><a href="menu.html"> Menú Futbolero</a></li>
                <li>
                    <img src="img/General/Logos/subway_logo.png" alt="Logo Subway">
                    <img src="img/General/Logos/Logo_Coca.png" alt="Logo Coca">
                </li>
            </ul>
        </label>
 
        <!-- Content -->
        <div class="confirmation">
            <div class="confirmation-backgroung">
                <img src="img/Formulario/landdd-01.png" alt="Fondo Confirmacion">
            </div>
            <div class="confirmation-content">
                <div class="header-text">
                    <h1 class="white-text footlong"><?php echo $name ?>:</h1>
                    <h2 class="footlong yellow-text">¡Ya quedaste participando!</h2>
                    <h3 class="white-text footlong">¡Suerte!</h3>
                </div>
                <div class="images-center">
                    <img src="img/General/Logo_copa_subway.png" alt="Logo Copa">
                    <a href="copasubway.com/inicio.html">
                        <img src="img/Formulario/landdd-02.png" alt="Ver más">
                    </a>
                </div>
                <div class="confirmation-footer">
                    <img src="img/General/Logos/subway_logo.png" alt="Logo Subway">
                    <img src="img/General/Logos/Logo_Coca.png" alt="Logo Coca">
                </div>
            </div>
                        <p class="cr sixInch">Imágenes con fines ilustrativos. Subway® es una marca registrada de Subway IP Inc. @2018 Subway IP Inc.</p>        </div>
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
