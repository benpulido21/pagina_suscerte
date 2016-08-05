
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<!--<style type="text/css">
	#apDiv1{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	background-image: url("{{asset('images/metal3.jpg')}}");
	}
	#apDiv2{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv3{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv4{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv5{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv6{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv7{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
	#apDiv8{
	background: #FFF;
	border: 1px solid #d0d0d0;
	border-top-width: 10px;
	border-right-width: 1em;
	border-left-width: thin;
	border-left-width: 1em;
	border-top-color: #FC0;
	border-right-color: #0000FF;
	border-left-color: #F00;
	border-bottom-width: 1em;
	border-bottom-color: #FC0;
	}
</style>-->
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
<header class="navegar">
	<nav class="php">
		<ul>
			<div>
<img src="{{asset('images/cintillo.png')}}" alt="" width="100%" />
           </div>
			<li><a href="{{action('HomeController@index')}}">Inicio</a></li>
			<li><a href="#about" class="scroll">Estampado de Tiempo</a></li>
			<li><a href="#beneficio" class="scroll">Beneficios</a></li>
			<li><a href="#servicio" class="scroll">Servicio de Estampado</a></li>
		</ul>
	</nav>
</header>
<!--<div>
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
		</div>-->
		<div class="header_left">
			<ul class="fb_icons">
				<li><a class="fb" href="https://www.facebook.com/suscerte"></a></li>
				<li><a class="twit" href="https://twitter.com/suscerte"></a></li>
				<!--<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>-->
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- header-bottom -->
	<!--<div class="header-bottom" id="apDiv1">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<!--<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<!--<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a href=""><img src="{{asset('images/logosuscerte.png')}}" alt=" " width="300" height="300" /></a></h1>
						</div>
					</div>-->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<!--<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-4" id="link-effect-4">
						<ul class="nav1 nav navbar-nav nav-wil">
								<li><a href="{{action('HomeController@index')}}" class="active" data-hover="Inicio">Inicio</a></li>
								<!--<li><a data-hover="Con&oacute;cenos" href="#about" class="scroll">Con&oacute;cenos</a></li>
								<li><a data-hover="Servicios" href="#services" class="scroll">Servicios</a></li>
								<li><a data-hover="Galer&iacute;a" href="#gallery" class="scroll"> Galer&iacute;a</a></li>
								<li><a data-hover="Cont&aacute;ctanos" href="#contact" class="scroll">Cont&aacute;ctanos</a></li>-->
						</ul>
					</nav>
					<!--<div class="search">
						<form action="#" method="post">
							<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>-->
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
		<!--<div  class="callbacks_container">
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
					<!--<div class="banner2">
						<div class="container">
							<!--<div class="banner-info">
								<h3>Deco Light</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia eos qui .</p>
							</div>
							<div class="bubble-effect text-center"><a  href="#gallery" class=" hvr-bubble-float-top scroll">See Our Gallery</a></div>-->
						<!--</div>
					</div>
				</li>
			</ul>-->
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div id="about" class="banner-bottom">
<br>
	</br>
	<div class="header_left">
			<ul class="fb_icons">
				<li><a class="fb" href="https://www.facebook.com/suscerte"></a></li>
				<li><a class="twit" href="https://twitter.com/suscerte"></a></li>
				<!--<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>-->
			</ul>
		</div>
	<div class="container">
		<h3 class="title">Estampado de Tiempo<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv2">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/16.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/17.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/5.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/6.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv3">
				<div class="creative">
				<h4><font color="#0000FF">¿Qué es el Estampado de Tiempo?</font></h4>
					<h5 style="text-align:justify;">Consiste en colocar notaciones cronológicas, en términos de fecha y hora, a la información contenida en un mensaje de datos en operaciones electrónicas. Esto permite validar que dicha información se generó en un instante de tiempo determinado. </h5>
<br>
</br>
<h4><font color="#0000FF">¿Qué es un proveedor de Estampado de Tiempo?</font></h4>
<h5 style="text-align:justify;">Es un entidad, que puede ser de carácter público o privada, encargada de prestar el servicio de Estampado de Tiempo, el cual debe estar previamente acreditado por Suscerte.
</h5>
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
<div id="beneficio" class="banner-bottom">
	<div class="container">
		<h3 class="title">Beneficios<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv4">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/18.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
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
					<!--<div class="bott-img">
					<img src="{{asset('images/5.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/6.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv5">
				<div class="creative">
					<h5 style="text-align:justify;">Entre los beneficios del uso del Estampado de Tiempo se cuentan:


• Impulso al Desarrollo Tecnológico del País a través del Gobierno Electrónico.


• Dar fe de en el Tiempo de la existencia de un dato electrónico desde un determinado momento, con la Fecha y Hora de la Nación.


• Prevención de la posibilidad del repudio posterior.


• Se promueve la confianza respecto al momento en que suceden las transacciones.


• Disminución del riesgo de adulteración de la información.


• Se Minimiza el riesgo de modificación en un documento electrónico.


• Se garantiza la confiabilidad de la información.
 </h5>

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
<div id="servicio" class="banner-bottom">
	<div class="container">
		<h3 class="title">Servicio de Estampado<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv6">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/111.jpg')}}" width="220" height="220"></a>
						<!--div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
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
					<!--<div class="bott-img">
					<img src="{{asset('images/5.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="col-sm-6 bottom-gds ">
					<!--<div class="bott-img">
					<img src="{{asset('images/6.jpg')}}" width="163" height="200">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-star icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>
					</div>-->
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv7">
				<div class="creative">
				<h4><font color="#0000FF">¿Porqué Venezuela toma la decisión de ofrecer este servicio?</font></h4>
					<h5 style="text-align:justify;">La Superintendencia de Servicios de Certificación Electrónica (SUSCERTE), ente encargado de coordinar e implementar el modelo jerárquico de la infraestructura Nacional de Certificación Electrónica, además de acreditar, supervisar y controlar a los Proveedores de Servicios de Certificación (PSC) y ser el ente responsable de la Autoridad de Certificación Raíz del Estado Venezolano, posee una infraestructura de Claves Públicas y Privadas (PKI) y cuenta con las condiciones necesarias para poseer una Autoridad de Estampado de Tiempo que pueda generar a su vez los Certificados para que los futuros Proveedores de Tiempo generen el servicio para los documentos y transacciones electrónicas. En tal sentido, Venezuela debe ir a la par de otros países en cuanto al desarrollo tecnológico en el ámbito de la seguridad de la información digital. Vale la pena destacar que en Lationamérica países como Brasil actualmente poseen en funcionamiento éste servicio, Uruguay, Argentina y Paraguay con ayuda del Mercosur y la Unión Europea próximamente lo estarán implementando. </h5>
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

<!-- //services -->
<!-- services-bottom -->
<div id="services" class="services-list">
	<div class="container">
		<h3 class="title"> Servicios<span></span></h3>
		<div class="services-gds" id="apDiv8">
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s" id="clickeable" onclick="location.href='{{action('HomeController@acreditacion')}}';">
				<!--<span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>-->
				<h4>Acreditación De Proveedores</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" id="clickeable" onclick="location.href='{{action('HomeController@registro')}}';">
				<!--<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span>-->
				<h4> Registro De Auditores</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.2s" id="clickeable" onclick="location.href='{{action('HomeController@estampado')}}';">
				<!--<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span>-->
				<h4>Estampado De Tiempo</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s" id="clickeable" onclick="location.href='{{action('HomeController@forense')}}';">
				<!--<span class="glyphicon glyphicon-leaf icon" aria-hidden="true"></span>-->
				<h4> Informática Forense</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s" id="clickeable" onclick="location.href='http://www.vencert.gob.ve';">
				<!--<span class="glyphicon glyphicon-folder-open icon" aria-hidden="true"></span>-->
				<h4> Seguridad de la Información</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.5s" id="clickeable" onclick="location.href='{{action('HomeController@biblioteca')}}';">
				<!--<span class="glyphicon glyphicon-heart-empty icon" aria-hidden="true"></span>-->
				<h4> Biblioteca: Normativas y Leyes</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
			<div class="clearfix"></div>			
		</div>
	</div>
</div>
<div class="copy_right text-center">

			<!--<p> &copy; 2016 Deco Light. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>-->
			<ul class="fb_icons2">
				<!--<li><a class="fb" href="https://www.facebook.com/suscerte"></a></li>
				<li><a class="twit" href="https://twitter.com/suscerte"></a></li>-->
				<!--<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>-->
			</ul>
	  </div>
		<div class="footer_top text-center">
			<!--<h2><a href="#home"><img src="{{asset('images/25.png')}}" alt=" " height="300" width="400" /></a></h2>-->
			<ul>
		<table border="0" align="center" width="1000">
</div>
</div>
<tr>
  <td><li><a href="http://www.presidencia.gob.ve"><img src="{{asset('images/presidencia_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.vicepresidencia.gob.ve"><img src="{{asset('images/vice_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.mcti.gob.ve"><img src="{{asset('images/ministerio_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.cantv.net"><img src="{{asset('images/cantv_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.fidetel.gob.ve"><img src="{{asset('images/movilnet_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.conciencia.mcti.gob.ve"><img src="{{asset('images/red_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.cnti.gob.ve"><img src="{{asset('images/cnti_on.jpg')}}"/></a></li></td>
  <td><li><a href="http://www.telecom.gob.ve"><img src="{{asset('images/telecom_on.jpg')}}"/></a></li></td>

									<form action="#" method="post">
<!-- //smooth scrollin
<!-- //services-bottom -->
<!-- team -->

<!-- //team -->
<!-- gallery -->

	
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

<!-- //login -->

<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> 