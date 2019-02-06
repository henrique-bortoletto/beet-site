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
                             <li class="menu-has-children"><a href="#"><?php echo $_SESSION['nomeusuario']; ?></a>
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

        <!-- inicio banner -->
        <section class="banner-area" id="home">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center">
                    <div class="banner-content col-lg-7 col-md-6 justify-content-center">
                        <h1>Confira nossos serviços</h1>
                        <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>
                        <a href="servicos.php" class="primary-btn header-btn text-uppercase mt-10">Saiba Mais</a>
                    </div>	
                    <div class="banner-img col-lg-5 col-md-6 align-self-end">
                        <img class="img-fluid" src="img/banner-img.png" alt="">
                    </div>											
                </div>
            </div>
        </section>
        <!-- fim banner -->

        <!-- inicio servico -->
        <section class="service-area section-gap" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-50 header-text text-center">
                        <h1 class="mb-10">Soluções</h1>
                        <p>Conheça um pouco das soluções oferecidas pela beet</p>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center">
                            <div class="thumb ">
                                <img src="img/o1.jpg" alt="">									
                            </div>
                            <h4>Design</h4>
                            <p>inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center">
                            <div class="thumb">
                                <img src="img/o2.jpg" alt="">									
                            </div>
                            <h4>Criatividade</h4>
                            <p>inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center">
                            <div class="thumb">
                                <img src="img/o3.jpg" alt="">									
                            </div>
                            <h4>Codigo</h4>
                            <p>inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
                        </div>
                    </div>	
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center">
                            <div class="thumb">
                                <img src="img/o4.jpg" alt="">									
                            </div>
                            <h4>Suporte</h4>
                            <p>inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.</p>
                        </div>
                    </div>																		
                </div>
            </div>	
        </section>
        <!-- fim servico -->

        <!-- inicio home sobre -->
        <section class="home-about-area section-gap relative mb-80 mt-80">			
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-6 no-padding home-about-right">
                        <h1>Oferecemos a melhor solução para seus prolemas</h1>
                        <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
            </div>	
        </section>   
        <!-- fim home sobre -->

        <!-- inicio processos -->
        <section class="work-process-area pt-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-7">
                        <div class="title text-center">
                            <h1 class="mb-10">Processos</h1>
                            <p>Etapas estabelecidas para atender e satisfazer o cliente</p>
                        </div>
                    </div>
                </div>	
                <div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
                    <div class="single-work-process">
                        <div class="work-icon-box">
                            <span class="lnr lnr-funnel"></span>
                        </div>
                        <h4 class="caption">Detectar o Problema</h4>
                    </div>
                    <div class="work-arrow">
                        <img src="img/arrow.png" alt=""/>
                    </div>
                    <div class="single-work-process">
                        <div class="work-icon-box">
                            <span class="lnr lnr-layers"></span>
                        </div>
                        <h4 class="caption">Soluções Divididas em Partes</h4>
                    </div>
                    <div class="work-arrow">
                        <img src="img/arrow.png" alt=""/>
                    </div>
                    <div class="single-work-process">
                        <div class="work-icon-box">
                            <span class="lnr lnr-paw"></span>
                        </div>
                        <h4 class="caption">Análise e Metodos</h4>
                    </div>
                    <div class="work-arrow">
                        <img src="img/arrow.png" alt=""/>
                    </div>
                    <div class="single-work-process">
                        <div class="work-icon-box">
                            <span class="lnr lnr-smile"></span>
                        </div>
                        <h4 class="caption">Resultado Final</h4>
                    </div>											
                    <div class="row">
                        <div class="col"></div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- fim processos -->

        <!-- inicio faq -->
        <section class="faq-area section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-50 header-text text-center">
                        <h1 class="mb-10">Diversidade</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>			
                <div class="row pt-120 skill-area justify-content-center" id="skills">
                    <div class="col-lg-3 single-skill mx-auto d-block">
                        <div class="skills skill-1" data-percent="80"></div>
                        <h6 class="text-uppercase">web design</h6>							
                    </div> 
                    <div class="col-lg-3 single-skill mx-auto d-block">
                        <div class="skills skill-2" data-percent="75"></div>	
                        <h6 class="text-uppercase">ui / ux design</h6>						      		
                    </div>	
                    <div class="col-lg-3 single-skill mx-auto d-block">
                        <div class="skills skill-3" data-percent="60"></div>
                        <h6 class="text-uppercase">mobile app</h6>						     			
                    </div>
                    <div class="col-lg-3 single-skill mx-auto d-block">
                        <div class="skills skill-4" data-percent="90"></div>
                        <h6 class="text-uppercase">web development</h6>						     			
                    </div>
                </div>
            </div>	
        </section>
        <!-- fim faq -->

        <!-- inicio footer -->		
        <footer class="footer-area section-gap mt-60">
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