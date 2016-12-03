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
    <meta name="herramienta web para aprender lengua de señas" content="">
    <meta name="Paulina Cruz y Corro Pérez" content="">
    <meta name="Pablo Antonio Peralta Sánchez" content="">
    <link rel='shortcut icon' href='favicon2.ico' type='image/x-icon'/ >

    <title>..:: Manos ::..</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- EXE LEARNING -->
    <!--<link rel="stylesheet" type="text/css" href="css/nav2.css" /> -->

    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" /> 

    <script type="text/javascript" src="jsX/exe_jquery.js"></script>
    <script type="text/javascript" src="jsX/common.js"></script>

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

<body id="page-top" class="index" >-<script type="text/javascript">document.body.className+=" js"</script>
<!--<body class="exe-web-site"><script type="text/javascript">document.body.className+=" js"</script>->
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

            <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <button type="button" class="btn btn-danger btn-lg"><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></button>
                        
                    </li>
                </ul>

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
                           <li><a href="home.php" class="daddy main-node">Inicio</a></li>
                           <li class="current-page-parent"><a href="vocales.php" class="current-page-parent daddy">Vocales</a>
                           <ul>
                              <li><a href="vPreg1.php" class="no-ch">1</a></li>
                              <li id="active"><a href="vPreg2.php" class="active no-ch">2</a></li>
                              <li><a href="vPreg3.php" class="no-ch">3</a></li>
                              <li><a href="vPreg4.php" class="no-ch">4</a></li>
                              <li><a href="vPreg5.php" class="no-ch">5</a></li>
                           </ul>
                           </li>
                           <li><a href="animales1.php" class="daddy">Animales - Parte 1</a>
                           <ul class="other-section">
                              <li><a href="an1Preg1.php" class="no-ch">1</a></li>
                              <li><a href="an1Preg2.php" class="no-ch">2</a></li>
                              <li><a href="an1Preg3.php" class="no-ch">3</a></li>
                              <li><a href="an1Preg4.php" class="no-ch">4</a></li>
                              <li><a href="an1Preg5.php" class="no-ch">5</a></li>
                           </ul>
                           </li>
                           <li><a href="animales2.php" class="daddy">Animales - Parte 2</a>
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


<div class="col-lg-5">
<div class="iDevice_wrapper MultichoiceIdevice em_iDevice" id="id4">
<div class="iDevice emphasis1" >


    <div class="question">
    <form name="multi-choice-form-4_86" action="#" onsubmit="return false" class="activity-form">

        <div id="taquestion4_86" class="block question iDevice_content" align="center">
        <span style="font-size: x-large;">¿Qué letra es?</span>
        <p><img src="http://i.imgur.com/AjUD45H.gif" width="390" height="220" style="font-size: 1em;" align="center" /></p>
        </div>
    </div>  
    <br><br>



</div>  <!-- iDevice_wrapper MultichoiceIdevice em_iDevice -->
</div>  <!-- iDevice emphasis1 -->
</div> <!-- col-lg-8 --> 


<div class="col-lg-3">
<div class="iDevice_wrapper MultichoiceIdevice em_iDevice" id="id4">
<div class="iDevice emphasis1" >

      <div class="iDevice_answers">
      <div class="iDevice_answer">
        <p class="iDevice_answer-field js-required">
        <label for="i4_89" class="sr-av"><a href="#answer-4_89">Opción 1</a></label><input type="radio" name="option4_86" id="i4_89" onclick="$exe.getFeedback(0,3,'4_86','multi')"/>
        </p>
        <div class="iDevice_answer-content" id="answer-4_89"><a name="answer-4_89"></a>
        <div id="taans4_89" class="block iDevice_content">
        <p><span style="font-size: large;">Z</span></p>
        </div>
        </div>
      </div>
      <div class="iDevice_answer">
        <p class="iDevice_answer-field js-required">
        <label for="i4_158" class="sr-av"><a href="#answer-4_158">Opción 2</a></label><input type="radio" name="option4_86" id="i4_158" onclick="$exe.getFeedback(1,3,'4_86','multi')"/>
        </p>
        <div class="iDevice_answer-content" id="answer-4_158"><a name="answer-4_158"></a>
        <div id="taans4_158" class="block iDevice_content">
        <p><span style="font-size: large;">D</span></p>
        </div>
        </div>
      </div>
      <div class="iDevice_answer">
        <p class="iDevice_answer-field js-required">
        <label for="i4_161" class="sr-av"><a href="#answer-4_161">Opción 3</a></label><input type="radio" name="option4_86" id="i4_161" onclick="$exe.getFeedback(2,3,'4_86','multi')"/>
        </p>
        <div class="iDevice_answer-content" id="answer-4_161"><a name="answer-4_161"></a>
        <div id="taans4_161" class="block iDevice_content">
        <p><span style="font-size: large;">A</span></p>
        </div>
        </div>
      </div>
      </div><!-- FIN PREGUNTAS --> 




      <div class="iDevice_feedbacks js-feedback">
        <h4 class="js-sr-av">Retroalimentación</h4>
        <div id="sa0b4_86" class="feedback js-hidden"><a name="sa0b4_86"></a>
        <div id="taf4_89" class=" iDevice_content">
        <p><span style="font-size: large;">No es la que buscamos.</span></p>
        </div>
        </div>
        <div id="sa1b4_86" class="feedback js-hidden"><a name="sa1b4_86"></a>
        <div id="taf4_158" class=" iDevice_content">
        <p><span style="font-size: large;">Esta es una consonante.</span></p>
        </div>
        </div>
        <div id="sa2b4_86" class="feedback js-hidden"><a name="sa2b4_86"></a>
        <div id="taf4_161" class=" iDevice_content">
        <p><span style="font-size: large;">Correcto. La A es la primera vocal.</span></p>
        </div>
        </div>
      </div><!-- FIN FEEDBACK --> 
    </form>



</div>  <!-- iDevice_wrapper MultichoiceIdevice em_iDevice -->
</div>  <!-- iDevice emphasis1 -->
</div> <!-- col-lg-8 --> 


      <div id='bottomPagination' align="center">
                     <div class="pagination noprt" align="center">
                      <a href="vPreg3.php" class="next"><span>Siguiente<span> &raquo;</span></span></a>
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

    <script type="text/javascript" src="jsX/_fpd_js.js"></script>


</body>

</html>
