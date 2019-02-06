<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <title>Beet Technology</title>
        <meta charset="UTF-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>

        <link rel="shortcut icon" href="img/fav.png"/>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"/> 
        <link rel="stylesheet" href="css/linearicons.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/magnific-popup.css"/>
        <link rel="stylesheet" href="css/nice-select.css"/>							
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>	
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 col-12 text-right">
                            <a href="tel:+55 99999-9999">+55 99999-9999</a>
                            <a href="#">beetcontato@gmail.com</a>				
                        </div>
                    </div>			  					
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <h3>Beet</h3>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.php">Home</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="servicos.php">Serviços</a></li>
                            <li><a href="cliente.php">Clientes</a></li>
                            <li><a href="blog.php">Blog</a></li>						          				          
                            <li><a href="contato.php">Contato</a></li>
                           <?php
                                if (isset($_SESSION['logado'])) { 
                            ?>
                             <li class="menu-has-children"><a href="logar.php"><?php echo $_SESSION['nomeusuario']; ?></a>
				            <ul>
				              <li><a href="pedido_servico.php">Solicitar Pedido</a></li>
				              <li><a href="visualizar_pedido.php">Meus Pedidos</a></li>
				              <li><a href="deslogar.php">Sair</a></li>
				            </ul>
				          </li>	
                       <?php } else { ?>
                        <li><a href="logar.php">Entrar</a></li>
                        <?php } ?>
                        </ul>
                    </nav><!-- #nav menu -->		    		
                </div>
            </div>
        </header><!-- fim header -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">Clientes</h1>	
                        <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a href="feedback.html">Clientes</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        
         <!-- portfolio -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-80">
                    <div class="single-defination">
                        <h4 class="mb-20">Portofolio</h4>
                        <p>Veja um pouco do nosso portfolio</p>
                    </div>
                </div>
            </div>
        </div>	
        <section class="top-category-widget-area mt-20">
            <div class="container section-top-border">
                <div class="row">		
                    <div class="col-lg-4">
                        <div class="single-cat-widget">
                            <div class="content relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="#" target="_blank">
                                  <div class="thumb">
                                     <img class="content-image img-fluid d-block mx-auto" src="img/cat-widget3.jpg" alt="">
                                  </div>
                                  <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Food</h4>
                                    <span></span>
                                    <p>Let the food be finished</p>
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>	
                    <div class="col-lg-4">
                        <div class="single-cat-widget">
                            <div class="content relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="#" target="_blank">
                                  <div class="thumb">
                                     <img class="content-image img-fluid d-block mx-auto" src="img/cat-widget3.jpg" alt="">
                                  </div>
                                  <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">IA</h4>
                                    <span></span>
                                    <p>Let the food be finished</p>
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>	
                    <div class="col-lg-4">
                        <div class="single-cat-widget">
                            <div class="content relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="#" target="_blank">
                                  <div class="thumb">
                                     <img class="content-image img-fluid d-block mx-auto" src="img/cat-widget3.jpg" alt="">
                                  </div>
                                  <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Block</h4>
                                    <span></span>
                                    <p>Let the food be finished</p>
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>												
                </div>
            </div>	
        </section>
        <!-- portfolio -->
        
        <!-- inicio clientes -->
        <section class="section-gap relative">			
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-30">
                        <div class="single-defination">
                            <h4 class="mb-20">Nossos Clientes</h4>
                            <p>Um pouco dos clientes em que a Beet teve prazer de trabalhar.</p>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="container no-padding section-top-border">
                <div class="brand-wrap ">
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l1.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l2.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l3.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l4.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l5.png" alt=""/></a>
                        </div>								
                    </div>																			
                </div>
                <div class="brand-wrap">
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l1.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l2.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l3.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l4.png" alt=""/></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l5.png" alt=""/></a>
                        </div>								
                    </div>																			
                </div>
            </div>	
        </section>   	
        <!-- Efim clientes -->	
	
		 <!-- inicio footer -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Mais</h6>
                            <p class="text-white">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Navegação</h6>
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li><a href="#" class="text-white">Home</a></li>
                                        <li><a href="#" class="text-white">Sobre</a></li>
                                        <li><a href="#" class="text-white">Serviços</a></li>
                                        <li><a href="#" class="text-white">Clientes</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li><a href="#" class="text-white">Blog</a></li>
                                        <li><a href="#" class="text-white">Contato</a></li>
                                        <li><a href="#" class="text-white">Entrar</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>						
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos direitos reservados.
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Fim Footer -->	

        <!-- inicio scripts -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/mn-accordion.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>	
        <script src="js/jquery.circlechart.js"></script>								
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
        <!-- fim scripts -->
        
    </body>
</html>