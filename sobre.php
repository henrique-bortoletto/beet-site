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

        <!-- inicio banner -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">Sobre</h1>	
                        <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a href="about.html">Sobre</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- fim banner -->	

        <!-- inicio home sobre -->
        <section class="section-gap relative">			
            <div class="container">
                <div class="section-top-border text-left">
						<h1 class="mb-30">A Beet</h1>
						<div class="row">
							<div class="col-md-8">
								<p class="text-left">No mercado desde 2017 atuamos no segmento de desenvolvimento de aplicações multiplataformas.
                        A Beet foi criada com o intuito de inovar e prover soluções de Tecnologia da Informação, a fim de desenvolver a solução mais adequada à necessidade de cada cliente, tendo como diferencial atender projetos específicos de forma dedicada.
                        A empresa conta com uma equipe altamente capacitada e continuamente treinada, preparada para oferecer as melhores soluções para seus clientes.</p>
							</div>
							<div class="col-md-4">
								<img src="img/b3.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
               
                <div class="section-top-border mt-40">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Missão</h4>
                                <p>O nosso propósito é desenvolver soluções criativas, personalizadas e inovadoras contribuindo assim para o sucesso e satisfação de nossos clientes.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Visão</h4>
                                <p>Ser reconhecida em excelência no desenvolvimento de soluções inteligentes em TI e alcançar um crescimento contínuo e sustentável com altos índices de satisfação à nossos clientes.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Valores</h4>
                                <p>Inovação, Foco na excelência, Ética, Qualidade assegurada dos processos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </section>   
        <!-- fim home sobre -->

        <!-- inicio depoimento -->
        <section class="testomial-area section-gap" id="testimonail">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-7">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Equipe</h1>
                            <p class="text-white">Conheça os membros que compoem o coração da beet</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="active-testimonial-carusel">
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="img/01-perfil.png" alt="Henrique Bortoletto"/>
                            <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Henrique Bortoletto</h5>
                            <p>Developer Front-End / Back-End</p>
                        </div>
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="img/04-perfil.png" alt="Victor Ceretti"/>
                            <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Victor Ceretti</h5>
                            <p>Analista QA</p>
                        </div>
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="img/02-perfil.png" alt="Gabriel Gomes"/>
                            <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Gabriel Gomes</h5>
                            <p>Developer Front-End</p>
                        </div>	
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="img/03-perfil.png" alt="Luiz Cripa"/>
                            <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Luiz Cripa</h5>
                            <p>Developer Back-End</p>
                        </div>
                            <div class="single-testimonial item">
                            <img class="mx-auto" src="img/05-perfil.png" alt="Rafael Toppis"/>
                            <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Rafael Toppis</h5>
                            <p>Developer Front-End</p>
                        </div>
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="img/06-perfil.png" alt="Felipe Montenegro"/>
                           <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                            </p>
                            <h5>Felipe Montenegro</h5>
                            <p>Developer Front-End</p>
                        </div>																									
                    </div>
                </div>
            </div>	
        </section>
        <!-- fim depoimento -->	

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