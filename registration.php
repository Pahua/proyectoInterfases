<?php
include("config.php");
include('userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';


/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
$username=$_POST['usernameReg'];
$email=$_POST['emailReg'];
$password=$_POST['passwordReg'];
/* Regular expression check */
$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $email_check && $password_check) 
{
$uid=$userClass->userRegistration($username,$password,$email);
if($uid)
{
$url='home.php';
header("Location: $url"); // Page redirecting to home.php 
}
else
{
$errorMsgReg="Usuario o correo ya registrado. Por favor intenta de nuevo";
}
}
}
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
                <a class="navbar-brand" href="index.html">MANOS</a>
            </div>


            <div class="col-md-1">
                <div class="navbar-header page-scroll">
                    
                </div>
            </div>
            </div>
    </nav>

     <header>
            <div class="row">
                <p>
                    <div class="col-lg-12 text-center">
                    <h2>¡Bienvenido!</h2>
                </div>
            </div>
    </header>


    <!-- Login -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¡Bienvenido!</h2>
                    <hr class="star-primary">
                </div>
            </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                     <p>Para tener acceso a nuestros cursos es necesario que te registres. Sólo necesitas:</p>
                                        <p> <ul style="list-style-type:square">
                                          <li>Nombre de usuario</li>
                                          <li>Correo válido</li>
                                          <li>Contraseña</li>
                                        </ul>
                                    <p>¡No olvides tu contraseña! La necesitarás para volver a tus cursos</p> 
                                     <p>
                                    <p style="font-size:300%; text-align:center;">¡Muchas gracias por tu interés en aprender LSM!</p>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                    <!--Header-->
                                    <div class="form-header purple darken-4">
                                        <h3><i class="fa fa-lock"></i>&nbsp; Registro:</h3>
                                    </div>
                                    <!--FORM-->
                                    <div id="signup">
                                   <form method="post" action="" name="signup">
                                      <div class="md-form">
                                        <i class="fa fa-user prefix"></i><label for="form">&nbsp; Usuario</label>
                                        <input type="text" name="usernameReg" class="form-control" placeholder="Nombre de usuario" required />
                                        
                                    </div>
                                    <p>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i><label for="form">&nbsp; Email</label>
                                        <input type="text" name="emailReg" class="form-control" placeholder="Email" required />
                                    </div>
                                    <p>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i> <label for="form">&nbsp; Contraseña</label>
                                        <input type="password" name="passwordReg" class="form-control" placeholder="Contraseña" required />  
                                    </div>
                                    <p>
                                    <p style="font-size:300%; text-align:center;">
                                    <div class="errorMsg"><?php echo $errorMsgReg; ?></div>
                                    <input type="submit" class="btn btn-success btn-lg" name="signupSubmit" value="Registrar">
                                    </form>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>



 
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
                        <p>Augusto Rodin 498
                            <br>Benito Juárez, Insurgentes Mixcoac, 03920. Ciudad de México. </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Manos en la web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contacto</h3>
                        <p>¿Preguntas? ¿Bugs? ¿Comentarios? <a href="mailto:0169782@up.edu.mx?Subject=Herramienta%20Manos">¡Envíanos un mail!</a></p>
                    </div>
                </div>
            </div>
        </div>
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
