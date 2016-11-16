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
    <link href="css/freelancer.min.css" rel="stylesheet">

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

            <div class="col-md-1">
                <a class="navbar-brand" href="#page-top">MANOS</a>
            </div>


            <div class="col-md-1">
                <div class="navbar-header page-scroll"> 
                </div>
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


     <header>
            <div class="row">
                <p>
                    <div class="col-lg-12 text-center">
                    <h2>¡Bienvenido!</h2>
                </div>
            </div>
    </header>

<section>
                <div class="col-lg-12 text-center">
                    <h2>Bienvenid@,  <?php echo $userDetails->username; ?></h2>
                    <hr class="star-primary">
                    <p>Continua con tus cursos</p>
                </div>
</section>


<!-- Portfolio Grid Section -->
<section id="portfolio">
        <div class="container">
            <!-- MENU LECCIONES -->
             <div class="col-lg-4">
                    <h3>Ubicación</h3>
            </div>

            <!-- Portfolio Grid Section -->
                <div class="col-lg-8">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Vocales
                            </div>
                        </div>
                        <img src="img/portfolio/menu_icons1.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Animales Parte 1
                            </div>
                        </div>
                        <img src="img/portfolio/menu_icons4.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Animales Parte 2
                            </div>
                        </div>
                        <img src="img/portfolio/menu_icons5.png" class="img-responsive" alt="">
                    </a>
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
