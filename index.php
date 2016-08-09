<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Seba:Olate</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Sebastian Olate Huenuñir">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/sweetalert.css" type="text/css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <script src="js/modernizr.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/noscript.css" /><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]><!-->
	<link rel="stylesheet" href="ie7/ie7.css">
	<!--<![endif]-->
</head>
<body>
<div id="wrap">
      
    <header id="header-home">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 animated infinite pulse">
                    <img src="img/logo-so.png" alt="Sebastaian Olate H Desarrollador Web">
                    <h1>Sebastián Olate H<br/><span>Desarrollador Web</span></h1>
                </div>
            </div>
        </div>  
    </header>
       
    <section id="slide-trabajos" class="clearfix">
     <div class="container">
      <h2>Últimos trabajos</h2>
    </div>       
       <ul class="bxslider">
          <li>
              <div class="container">
                  <div class="row">
                      <article class="col-xs-6">
                        <a href="hites.php">
                            <figure>
                              <img src="img/encargo8.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Cyberday Hites</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                      <article class="col-xs-6">
                        <a href="wom.php">
                            <figure>
                              <img src="img/encargo7.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Campaña 1 millón</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                  </div>
              </div>
          </li>
          <li>
              <div class="container">
                  <div class="row">
                      <article class="col-xs-6">
                        <a href="cool.php">
                            <figure>
                              <img src="img/encargo6.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Librería Cool Book</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                      <article class="col-xs-6">
                        <a href="touch.php">
                            <figure>
                              <img src="img/encargo5.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Touch and Go.js</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                  </div>
              </div>
          </li>
          <li>
              <div class="container">
                  <div class="row">
                      <article class="col-xs-6">
                        <a href="tapsin.php">
                            <figure>
                              <img src="img/encargo4.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Propuesta Tapsin Caliente</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                      <article class="col-xs-6">
                        <a href="espiropapas.php">
                            <figure>
                              <img src="img/encargo3.jpg" />
                              <figcaption><span><i class="fa fa-eye" aria-hidden="true"></i></span><p>Espiropapas Chile</p></figcaption>
                          </figure>
                        </a>  
                      </article>
                  </div>
              </div>
          </li>
        </ul>
    </section>    
<!-- ------------------------------------------------------------ -->
   <div class="boton">
       <a href="portafolio.php">Ver mi portafolio +</a>
    </div>

    <section id="quien-soy">
        <div class="container-fluid">
            <div class="row">
                <div class="caja-soy-foto col-md-4"></div>
                <div class="caja-soy-descripcion col-md-4">
                    <h2>Diseño y desarrollo eficaz</h2>
                    <p>Siempre en busqueda de la vanguardia y el desarrollo profesional, dispuesto a seguir aprendiendo</p>
                    <a href="curriculum.php">Acerca de mi...</a>
                </div>
                <div class="caja-soy-responsive col-md-4">
                    <h3>Trabajos adaptables<br/> a dispositivos</h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="col-xs-6">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-6">
                            <i class="fa fa-tablet"></i>
                        </div>
                        <div class="col-xs-6">
                            <i class="fa fa-mobile"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>    
<?php if(isset($_GET[proceso])){?>    
    <div class="proceso">
      <p class="close" aria-label="Close"><span aria-hidden="true">&times;</span></p>
       <h2 class="text-center">Proceso de diseño</h2>
        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="img/pantalla-1.jpg" data-lightbox="roadtrip">Ver imágenes</a></li>
          <li role="presentation" class="hidden"><a href="img/pantalla-2.jpg" data-lightbox="roadtrip"></a></li>
          <li role="presentation" class="hidden"><a href="img/pantalla-3.jpg" data-lightbox="roadtrip"></a></li>
          <li role="presentation" class="hidden"><a href="img/boceto1.jpg" data-lightbox="roadtrip"></a></li>
          <li role="presentation" class="hidden"><a href="img/boceto2.jpg" data-lightbox="roadtrip"></a></li>
          <li role="presentation" class="hidden"><a href="img/boceto3.jpg" data-lightbox="roadtrip"></a></li>
        </ul>
    </div>
<? }?>
    <?php include('footer.php'); ?>