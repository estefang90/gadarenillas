<!DOCTYPE html>
<html lang="en">
     <head>
     <title>GAD Municipal de Arenillas</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
     <link rel="stylesheet" href="css/camera.css"> 
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <link href="css/owl.carousel.css" rel="stylesheet">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
	 <script src="js/script.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/owl.carousel.js"></script>      
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
     <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
        <link href='//fonts.googleapis.com/css?family=Asap:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script src="js/html5shiv.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
        <script>
            $(document).ready(function(){
                jQuery('#camera_wrap').camera({
                    loader: true,
                    pagination: true,
                    minHeight: '200',
                    thumbnails: false,
                    height: '37.55208333333333%',
                    caption: true,
                    navigation: true,
                    fx:  'scrollBottom'
                });
                $("#owl").owlCarousel({
                    items : 7,
                    itemsDesktop : [1599,6],
                    itemsDesktopSmall : [1299, 5],
                    itemsTablet: [995, 4],
                    itemsTabletSmall: [767, 3],
                    itemsMobile : [479, 1],
                    lazyLoad : true,
                    pagination: false,
                    navigation : true
                });
                $("#owl1").owlCarousel({
                    items : 1,
                    itemsDesktop : [995,1],
                    itemsDesktopSmall : [767, 1],
                    itemsTablet: [700, 1],
                    itemsMobile : [479, 1],
                    lazyLoad : true,
                    pagination: true,
                    navigation : true
                });
                /*Back to Top*/
                $().UItoTop({ easingType: 'easeOutQuart' });
             });
        </script>

        <script>
            $(document).ready(function(){
                /*Back to Top*/
                $().UItoTop({ easingType: 'easeOutQuart' });
             });
        </script>
     </head>
<body id="top">
<header id="header">
    <div class="bg_1">
        <div class="container">
            <div class="row">
                <div class="grid_5">
                    <!-- <ul class="top-links">
                        <li><a href="#">Terms</a></li>
                        <li><a href="index-6.html">Privacy Policy</a></li>
                        <li><a href="#">Legal Agreement</a></li>
                    </ul> -->
                </div>
                <div class="grid_7">
                    <div class="tel">
                        <div><i class="fa fa-phone"></i>
                        +593 7 2909 610</div>
                    </div>
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/arenillasgadm" class="col1"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="col2"><i class="fa fa-twitter"></i></a></li>
                        <<!-- li><a href="#" class="col3"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="col4"><i class="fa fa-linkedin"></i></a></li> -->
                        <li><a href="https://www.arenillas.gob.ec/webmail" class="col5"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_2">
        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <h1><a href="index.php"><img src="images/logo1.png" alt=""></a></h1>
                </div>
                <div class="grid_8">
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php" height="150px">Inicio</a></li>
                            <li><a href="#">Municipio</a>
                                <ul>
                                    <li class="sub_men"><a href="alcalde.php">Alcaldia</a></li>
                                    <br></br>
                                    <li><a href="concejales.php">Concejales</a></li>
                                    <br></br>
                                    <li><a href="ordenanzas.php">Ordenanzas</a></li>
                                    <br></br>
                                    <li><a href="resoluciones.php">Resoluciones</a></li>
                               </ul>
                            </li>
                            <li><a href="#">Mi Ciudad</a>
                                <ul>
                                    <li><a href="himno.php">Himno</a></li>
                                    <br></br>
                                    <li><a href="simbolos.php">Bandera y Escudo</a></li>
                                    <br></br>
                                    <li><a href="antecedentes.php">Nuestra Historia</a></li>
                                </ul>
                            </li>    
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Transparencia</a>
                                <ul>
                                    <li><a href="rendicion.php">Rendicion de Cuentas</a></li>
                                    <li><a href="transparencia.php">Ley de Transparencia</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Noticias</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clear"></div>