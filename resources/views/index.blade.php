
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>.::SUSCERTE::.</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Deco Light Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/swipebox.css')}}">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
<!--animate-->
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div>
<img src="{{asset('images/cintillo.png')}}" alt=" " />
</div>
<!-- header -->
<!--div class="header wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
	<div class="container">
		<div class="header_right">
			<div class="login">
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal5">Register</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal4">Login</a></li>
				</ul>
			</div>
		</div>
		<div class="header_left">
			<ul class="fb_icons">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twit" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- header-bottom -->
	<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a href=""><img src="{{asset('images/logosuscerte.png')}}" alt=" " width="100" height="100" /></a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-4" id="link-effect-4">
						<ul class="nav1 nav navbar-nav nav-wil">
								<li><a  class="active " data-hover="Inicio" href="{{action('HomeController@index')}}">Inicio</a></li>
								<li><a data-hover="Quienes somos" href="#about" class="scroll">Quienes somos</a></li>
								<li><a data-hover="Servicios" href="#services" class="scroll">Servicios</a></li>
								<li><a data-hover="Noticias" href="#gallery" class="scroll"> Noticias</a></li>
								<li><a data-hover="Contactos" href="#contact" class="scroll">Contactos</a></li>
						</ul>
					</nav>
					<div class="search">
						<form action="#" method="post">
							<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header-bottom -->
<!-- banner -->
<div id="home" class="banner">
<!--se deben aumentar el tamaño de las imagenes a 256 kb, las actuales poseen 45 kb-->
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
						<div class="container">
							<!--<div class="banner-info">
								<h3>Deco Light</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia eos qui .</p>
							</div>
							<div class="bubble-effect text-center"><a  href="#gallery" class=" hvr-bubble-float-top scroll">See Our Gallery</a></div>-->
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<!--<div class="banner-info">
								<h3>Deco Light</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia eos qui .</p>
							</div>
							<div class="bubble-effect text-center"><a  href="#gallery" class=" hvr-bubble-float-top scroll">See Our Gallery</a></div>-->
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Con&oacute;cenos<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/q1.JPG')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/2.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/55.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/6.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h1><font color="#0000FF">¿Quienes somos?</font></h1>
					<h5 style="text-align:justify;">La Superintendencia de Servicios de Certificación Electrónica (SUSCERTE), es un servicio desconcentrado sin personalidad jurídica, creado mediante el Decreto- Ley N° 1.204 de fecha 10 de febrero de 2001, sobre Mensajes de Datos y Firmas Electrónicas, publicado en la Gaceta Oficial de la República Bolivariana de Venezuela N° 37.148 del 28 de febrero de 2001.
Es el organismo encargado de coordinar e implementar el modelo jerárquico de la infraestructura Nacional de Certificación Electrónica, también acredita, supervisa y controla a los Proveedores de Servicios de Certificación (PSC) y es el ente responsable de la Autoridad de Certificación Raíz del Estado Venezolano. Así mismo tiene como alcance proveer estándares y herramientas para implementar una tecnología de información óptima en las empresas del sector público, a fin de obtener un mejor funcionamiento y proporcionar niveles de seguridad </h5>

					<!--<div class="progress-gds">
						<h5>Doloremque / 60%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">

							</div>
						</div>
						<h5>Laudantium / 45%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
							</div>
						</div>
						<h5>Perspiciatis / 15%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
							</div>-->
						</div>
						
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Misión y Visión</span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/66.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/7.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/5.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/pic1.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
				<h4><font color="#0000FF">Misión</font></h4>
					<h5 style="text-align:justify;">“Desarrollar y promover los Sistemas Nacionales de Seguridad de Información, Certificación Electrónica y Gestión de Incidentes Telemáticos, como herramientas habilitadoras del desarrollo tecnológico nacional, favoreciendo la inclusión del soberano en los servicios de gobierno electrónico y fortaleciendo los Sistemas de Información de los Órganos y Entes del Poder Público Nacional”.</h5>
					<br>
					</br>
					<h4><font color="#0000FF">Visión</font></h4>
					<h5 style="text-align:justify;">“Ser reconocida nacional e internacionalmente como una Institución moderna que desarrolle, impulse y motive la transformación tecnológica del país, mediante el uso masivo de plataformas informáticas seguras, enmarcada dentro de la nueva ética socialista”.</h5>

					<!--<div class="progress-gds">
						<h5>Doloremque / 60%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">

							</div>
						</div>
						<h5>Laudantium / 45%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
							</div>
						</div>
						<h5>Perspiciatis / 15%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
							</div>-->
						</div>
						
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Valores<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/q1.JPG')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/7.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/8.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/9.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h5 style="text-align:justify;">La funciones sustantivas de la Superintendencia de Servicios de Certificación Electrónica (SUSCERTE), están enmarcadas en un nivel macro en los procesos siguientes: Certificados y Firmas Electrónicas, Seguridad de la Información y la Gestión de Incidentes Telemáticos, nuestras acciones las ejecutamos cumpliendo con los valores y principios que se describen a continuación: </h5>
					<br>
					</br>
<h5 style="text-align:justify;"><font color="#0000FF">Creatividad:</font> Innovamos constantemente para convertir las dificultades de nuestro entorno en grandes oportunidades para nuestro país.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Confidecialidad:</font>Valor intrínseco que deben poseer todos los miembros del equipo de nuestra Institución.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Eficiencia:</font>Propiciamos en nuestros trabajadores el cumplimiento de los objetivos y metas, alineados a las políticas y estrategias establecidas por el Ejecutivo Nacional, cumpliendo para ello con las normas legales.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Eficacia:</font>Utilizamos de manera racional los recursos públicos (humanos, materiales y financieros), en la gestión encomendada.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Excelencia:</font>La asumimos como una norma de conducta colectiva que nos orienta al mejoramiento continuo de todos nuestros procesos.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Ética:</font>Nuestras actuaciones son imparciales y transparentes en la gestión de los procesos y la administración de los recursos de la Institución.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Humanismo:</font>Respetamos y apoyamos a nuestros trabajadores ante todo como seres humanos, buscando siempre su bienestar, y el mejoramiento de su calidad de vida y de sus familias.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Lealtad Institucional:</font>Tenemos un alto compromiso con el avance e independencia tecnológica de nuestro país y con la Misión y Visión Institucional.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Trabajo en equipo:</font>Orientamos nuestro trabajo a la cooperación e integración de cada uno de los miembros del equipo en cada proyecto y proceso que desarrollamos.</h5>
<br>
</br>
<h5 style="text-align:justify;"><font color="#0000FF">Tolerancia:</font>Reconocemos y respetamos el derecho de todos los miembros de nuestro equipo a tener ideologías diferentes, fortaleciéndonos como Institución y como parte activa de la sociedad de las diferentes visiones que podamos tener.</h5>
					<!--<div class="progress-gds">
						<h5>Doloremque / 60%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">

							</div>
						</div>
						<h5>Laudantium / 45%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
							</div>
						</div>
						<h5>Perspiciatis / 15%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
							</div>-->
						</div>
						
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Resposabilidad Social<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/1_1.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/2_1.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/3_1.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/3.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h5 style="text-align:justify;">La noción de responsabilidad social en nuestro país tiene su raíz en el artículo 2 de la Constitución de la República Bolivariana de Venezuela, donde se prevé que “Venezuela se constituye en un Estado democrático y social de Derecho y Justicia, que propugna como valores superiores de su ordenamiento jurídico y de su actuación, (...)la responsabilidad social”
En este sentido SUSCERTE Involucra a diversos sectores de la vida nacional sobre la importancia y el uso de la tecnología de la información y comunicación al brindar una serie charlas, talleres, foros, cursos en todo el país, dirigidos a las instituciones del Estado, comunidades universidades, planteles escolares entre otros que persigue concientizar a la ciudadanía en una cultura de seguridad frente al Internet y Redes Sociales. </h5>
					<br>
					</br>
					<!--<div class="progress-gds">
						<h5>Doloremque / 60%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">

							</div>
						</div>
						<h5>Laudantium / 45%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
							</div>
						</div>
						<h5>Perspiciatis / 15%</h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
							</div>-->
						</div>
						
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div class="services">
	<div class="container">
		<h3 class="title"> Products <span></span></h3>
		<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
				<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
				</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="col-md-3 recharge-left wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item bath1" aria-controls="tab_item-0" role="tab"><span>Baths</span><i></i></li> 
										  <li class="resp-tab-item bath2" aria-controls="tab_item-1" role="tab"><span>Sofas</span><i></i></li> 
										  <li class="resp-tab-item bath3" aria-controls="tab_item-2" role="tab"><span>Cupboards</span><i></i></li> 
										  <li class="resp-tab-item bath4" aria-controls="tab_item-3" role="tab"><span>Doors</span><i></i></li> 
										  <li class="resp-tab-item bath5" aria-controls="tab_item-4" role="tab"><span>Lamps</span><i></i></li> 
									  </ul>	
								</div>
								<div class="col-md-9 recharge-right wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
									<div class="resp-tabs-container">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="col-md-4 product-left">
												<img class="img-responsive" src="{{asset('images/pic5.jpg')}}" alt=" "/>
											</div>
											<div class="col-md-8 product-right">
												<h4>VOLUPTATEM QUIA VOLUPTAS SIT</h4>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
												rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut 
												neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin.</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="col-md-4 product-left">
												<img class="img-responsive" src="{{asset('images/pic6.jpg')}}" alt=" "/>
											</div>
											<div class="col-md-8 product-right">
												<h4>VOLUPTATEM QUIA VOLUPTAS SIT</h4>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
												rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut 
												neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin.</p>
											</div>
											<div class="clearfix"></div>										 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											<div class="col-md-4 product-left">
												<img class="img-responsive" src="{{asset('images/pic7.jpg')}}" alt=" "/>
											</div>
											<div class="col-md-8 product-right">
												<h4>VOLUPTATEM QUIA VOLUPTAS SIT</h4>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
												rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut 
												neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin.</p>
											</div>
											<div class="clearfix"></div>										 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="col-md-4 product-left">
												<img class="img-responsive" src="{{asset('images/pic9.jpg')}}" alt=" "/>
											</div>
											<div class="col-md-8 product-right">
												<h4>VOLUPTATEM QUIA VOLUPTAS SIT</h4>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
												rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut 
												neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin.</p>
											</div>
											<div class="clearfix"></div>										 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="col-md-4 product-left">
												<img class="img-responsive" src="{{asset('images/pic8.jpg')}}" alt=" "/>
											</div>
											<div class="col-md-8 product-right">
												<h4>VOLUPTATEM QUIA VOLUPTAS SIT</h4>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus
												rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut 
												neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
												<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
												suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, 
												sollicitudin.</p>
											</div>
											<div class="clearfix"></div>										 
										</div>
										
									</div>
								</div>
							</div>
						</div>

	</div>
</div>
<!-- //services -->
<!-- services-bottom -->
<div id="services" class="services-list">
	<div class="container">
		<h3 class="title"> Servicios<span></span></h3>
		<div class="services-gds">
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s" id="clickeable" onclick="location.href='{{action('HomeController@acreditacion')}}';">
				<span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
				<h4>Acreditación De Proveedores</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" id="clickeable" onclick="location.href='{{action('HomeController@registro')}}';">
				<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span>
				<h4> Registro De Auditores</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.2s" id="clickeable" onclick="location.href='{{action('HomeController@estampado')}}';">
				<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span>
				<h4>Estampado De Tiempo</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s" id="clickeable" onclick="location.href='{{action('HomeController@forense')}}';">
				<span class="glyphicon glyphicon-leaf icon" aria-hidden="true"></span>
				<h4> Informática Forense</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<!--<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
				<span class="glyphicon glyphicon-folder-open icon" aria-hidden="true"></span>
				<h4> Aliquampret</h4>
				<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>
			</div>-->
			<!--div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
				<span class="glyphicon glyphicon-heart-empty icon" aria-hidden="true"></span>
				<h4> Suspendisse</h4>
				<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>
			</div>-->
			<div class="clearfix"></div>			
		</div>
	</div>
</div>
<!-- //services-bottom -->
<!-- team -->
<div class="team">
	<div class="container">
		<h3 class="title"> Equipo <span></span></h3>
		<div class="team_gds">
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="{{asset('images/team1.jpg')}}"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class="fc1"></i></a>
						<a href="#"  class="face_one"><i class="fc2"></i></a>
						<a href="#"  class="face_one"><i class="fc3"></i></a>
					</div>
				</div>
				<h4>Patrick</h4>
				<p>Designer</p>
			</div>
		
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="{{asset('images/team3.jpg')}}"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class="fc1"></i></a>
						<a href="#"  class="face_one"><i class="fc2"></i></a>
						<a href="#"  class="face_one"><i class="fc3"></i></a>
					</div>
				</div>
				<h4>Victoria</h4>
				<p>Developer</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="{{asset('images/team4.jpg')}}"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class="fc1"></i></a>
						<a href="#"  class="face_one"><i class="fc2"></i></a>
						<a href="#"  class="face_one"><i class="fc3"></i></a>
					</div>
				</div>
				<h4>Federica</h4>
				<p>Manager</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="{{asset('images/team2.jpg')}}"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class="fc1"></i></a>
						<a href="#"  class="face_one"><i class="fc2"></i></a>
						<a href="#"  class="face_one"><i class="fc3"></i></a>
					</div>
				</div>
				<h4>Thompson</h4>
				<p>Assistant</p>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
<!-- //team -->
<!-- gallery -->
<div id="gallery" class="gallery">
	<div class="container">
		<h3 class="title"> Noticias <span></span></h3>
		<div class="gallery_gds">
			<ul class="simplefilter wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <li class="active" data-filter="all">Todas</li>
                <li data-filter="1">Categoria</li>
                <li data-filter="2">Categoria1</li>
                <li data-filter="3">Categoria2</li>
                <li data-filter="4">Categoria3</li>
            </ul>
     
            <div class="filtr-container wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class=" col-md-4 filtr-item" data-category="1, 5" data-sort="Busy streets">
					<a href="{{asset('images/g1.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="images/g1.jpg" alt=" " /></div>
						</div>
					</a>
                </div>
                <div class="col-md-4 filtr-item" data-category="2, 5" data-sort="Luminous night">
					<a href="{{asset('images/g2.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="{{asset('images/g2.jpg')}}" alt=" " /></div>
						</div>
					</a>

                </div>
                <div class="col-md-4 filtr-item" data-category="1, 4" data-sort="City wonders">
                    <a href="{{asset('images/g3.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="{{asset('images/g3.jpg')}}" alt=" " /></div>
						</div>
					</a>

                </div>
                <div class=" col-md-4 filtr-item" data-category="3" data-sort="In production">
                    <a href="{{asset('images/g4.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="{{asset('images/g4.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
                <div class="col-md-4 filtr-item" data-category="3, 4" data-sort="Industrial site">
                    <a href="{{asset('images/g5.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img  src="{{asset('images/g5.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
                <div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <a href="{{asset('images/g6.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img  src="{{asset('images/g6.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
                <div class="col-md-4  filtr-item" data-category="1, 5" data-sort="City lights">
                    <a href="{{asset('images/g7.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img  src="{{asset('images/g7.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
                <div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                    <a href="{{asset('images/g8.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="{{asset('images/g8.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
				<div class="col-md-4 filtr-item" data-category="3" data-sort="Dreamhouse">
                    <a href="{{asset('images/g3.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">
									<div class="date">Deco Light</div>			
									<div class="line"></div>			
									<div class="headline">Doloremque laudantium</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img  src="{{asset('images/g3.jpg')}}" alt=" " /></div>
						</div>
					</a>
                </div>
               <div class="clearfix"> </div>
            </div>
		</div>
	</div>
	
    <!-- Include jQuery & Filterizr -->
    
    <script src="{{asset('js/jquery.filterizr.js')}}"></script>
    <script src="{{asset('js/controls.js')}}"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
	<!--//gallery-->
<!-- swipe box js -->
	<script src="{{asset('js/jquery.swipebox.min.js')}}"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->

</div>
<!-- //gallery -->
<!-- contact -->
<div id="contact" class="contact wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.9517421108594!2d-66.89900127355854!3d10.504467256254376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a592e7618a8ef%3A0xdc89c13fe845f4a9!2sTorre+BFC!5e0!3m2!1ses!2sve!4v1467926972713" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="map-pos">
			<div class="container">
				<div class="col-md-4 map_left">
					<h3>CONTACTOS <span></span></h3>
				</div>
				<div class="col-md-8 map_right text-center">
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						<ul>
							<li>0212-5785674</li>
							<li>0212-5724732</li>
							<li>0212-5724932</li>
						</ul>
					</div>
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						<ul>
							<li> Av. Andrés Bello</li>
							<li> Edificio BFC. Piso 13.</li>
							<li>VenCERT. Caracas. Distrito Capital. Venezuela</li>
						</ul>
					</div>
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<ul>
							<li><a href="mailto:atencionalcuidadano@suscerte.gob.ve">atencionalcuidadano@suscerte.gob.ve</a></li>
							<li><a href="rrhh@suscerte.gob.ve">rrhh@suscerte.gob.ve</a></li>
							<li><a href="cenif@suscerte.gob.ve">cenif@suscerte.gob.ve</a></li>
							<li><a href="ra@suscerte.gob.ve">ra@suscerte.gob.ve</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="footer wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0.2s">
	<div class="container">
		<div class="mail_us">
			<div class="col-md-5 mail_left">
				<img src="{{asset('images/q1.JPG')}}" alt=" "/>
			</div>
			<div class="col-md-7 mail_right">
				<form action="#" method="post">
					<input type="text" name="Name" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
					<input type="email" name="Email" value="Correo Electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo Electrónico';}" required="">
					<input type="text" name="Mobile number" value="Número de Teléfono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Número de Teléfono';}" required="">
					<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje...</textarea>
					<input type="submit" value="Enviar">
					
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer_top text-center">
			<h2><a href="#home"><img src="{{asset('images/logosuscerte.png')}}" alt=" " height="200" width="200" /></a></h2>
			<ul>
				<li><a href="">Inicio</a></li>
				<li><a href="#about" class="scroll">Quienes somos</a></li>
				<li><a href="#services" class="scroll">Servicios</a></li>
				<li><a href="#gallery" class="scroll"> Noticias</a></li>
				<li><a href="#contact" class="scroll">Contactos</a></li>
			</ul>
		</div>
		<div class="copy_right text-center">
			<!--<p> &copy; 2016 Deco Light. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>-->
			<ul class="fb_icons2">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twit" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-bottom">
									<h3>Login</h3>
									<form action="#" method="post">
									<div class="col-md-6">
										<div class="login-mail">
											<input type="text" name="Email" placeholder="Email" required="">
											<i class="glyphicon glyphicon-envelope"></i>
										</div>
										<div class="login-mail">
											<input type="password" name="Password" placeholder="Password" required="">
											<i class="glyphicon glyphicon-lock"></i>
										</div>
										   <div class="news-letter ">