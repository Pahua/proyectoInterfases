<?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="herramienta web para aprendeR lengua de señas" content="">
    <meta name="Paulina Cruz y Corro Pérez" content="">
    <meta name="Pablo Antonio Peralta Sánchez" content="">
    <link rel='shortcut icon' href='favicon2.ico' type='image/x-icon'/ >

    <title>..:: Manos ::..</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- EXE LEARNING -->
    <link rel="stylesheet" type="text/css" href="css/content.css" />
    <!--<link rel="stylesheet" type="text/css" href="css/nav2.css" /> -->

    <script type="text/javascript" src="cursos/js/exe_jquery.js"></script>
    <script type="text/javascript">$exe_i18n={previous:"Anterior",next:"Siguiente",show:"Mostrar",hide:"Ocultar",showFeedback:"Mostrar retroalimentación",hideFeedback:"Ocultar retroalimentación",correct:"Correcto",incorrect:"Incorrecto",menu:"Menú",print:"Imprimir"}</script>
    <script type="text/javascript" src="cursos/js/common.js"></script>
    <script type="text/javascript" src="cursos/js/_fpd_js.js"></script>
     <!-- FIN EXE LEARNING -->

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

  <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-1">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <img src="img/manos_icon2.png" class="img-responsive" alt="" href="#page-top">   
                </div>
            </div>

            <div class="col-md-2">
                <a class="navbar-brand text-center" href="#page-top">MANOS</a>
            </div>



            <div class="col-md-2">
                <div class="navbar-header page-scroll"> 
                </div>
            </div>


             <div class="col-md-5 text-center" style="color:white; font-size:150%;">
                <h2>Bienvenid@  <?php echo $userDetails->username; ?></h2>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <button type="button" class="btn btn-danger btn-lg"><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></button>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!-- Portfolio Grid Section -->
<section id="portfolio">
        <div class="container">
           <p>
            <!-- MENU LECCIONES -->
             <div class="col-lg-4" >
                        <div id="siteNav">
                        <ul>
                           <li><a href="home.php" class="daddy">Inicio</a></li>
                           <li id="active"><a href="vocales.php" class="active current-page-parent daddy">Vocales</a>
                           <ul class="other-section">
                              <li><a href="vPreg1.php" class="no-ch">1</a></li>
                              <li><a href="vPreg2.php" class="no-ch">2</a></li>
                              <li><a href="vPreg3.php" class="no-ch">3</a></li>
                              <li><a href="vPreg4.php" class="no-ch">4</a></li>
                              <li><a href="vPreg5.php" class="no-ch">5</a></li>
                           </ul>
                           </li>
                           <li><a href="animales1.php" class="daddy">Animales 1</a>
                           <ul class="other-section">
                              <li><a href="an1Preg1.php" class="no-ch">1</a></li>
                              <li><a href="an1Preg2.php" class="no-ch">2</a></li>
                              <li><a href="an1Preg3.php" class="no-ch">3</a></li>
                              <li><a href="an1Preg4.php" class="no-ch">4</a></li>
                              <li><a href="an1Preg5.php" class="no-ch">5</a></li>
                           </ul>
                           </li>
                           <li><a href="animales2.php" class="daddy">Animales 2</a>
                           <ul class="other-section">
                             <li><a href="an2Preg1.php" class="no-ch">1</a></li>
                              <li><a href="an2Preg2.php" class="no-ch">2</a></li>
                              <li><a href="an2Preg3.php" class="no-ch">3</a></li>
                              <li><a href="an2Preg4.php" class="no-ch">4</a></li>
                              <li><a href="an2Preg5.php" class="no-ch">5</a></li>
                           </ul>
                           </li>
                           <li><a href="home.php"  class="daddy">Colores - Próximamente</a></li>
                           <li><a href="home.php"  class="daddy">Familia - Próximamente</a></li>
                           <li><a href="home.php"  class="daddy">Países - Próximamente</a></li>
                        </ul>
                        </div>
          </div>
          <div class="col-lg-8" >
            <!-- COMIENZA EXE -->
             <div id="main-wrapper">
                <div id="main"><a name="main"></a>
                <div id="nodeDecoration" align="center"><h1 id="nodeTitle">Vocales</h1></div><p>
                  <div class="iDevice_wrapper AppletIdevice" id="id0">
                    <div class="iDevice emphasis0" >
                        <div class="iDevice_content">
                        <center>
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/C-sTtdga7po?autoplay=1" frameborder="0" allowfullscreen></iframe>
                        </center>
                        </div>
                    </div>
                  </div>
                </div>
            </div>  

               <div id='bottomPagination' align="center">
                <div class="pagination noprt">
                  <a href="vPreg1.php" class="Nbutton"><span><span></span>Comenzar lección</span></a>
                </div>
              </div>
</div>        
</section>



    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; MANOS 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
