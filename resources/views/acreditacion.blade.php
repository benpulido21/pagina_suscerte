
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
							<h1><a href=""><img src="{{asset('images/logosuscerte.png')}}" alt=" " width="300" height="300" /></a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-4" id="link-effect-4">
						<ul class="nav1 nav navbar-nav nav-wil">
								<li><a  class="active " data-hover="Inicio" href="{{action('HomeController@index')}}">Inicio</a></li>
								<!--<li><a data-hover="Con&oacute;cenos" href="#about" class="scroll">Con&oacute;cenos</a></li>
								<li><a data-hover="Servicios" href="#services" class="scroll">Servicios</a></li>
								<li><a data-hover="Galer&iacute;a" href="#gallery" class="scroll"> Galer&iacute;a</a></li>
								<li><a data-hover="Cont&aacute;ctanos" href="#contact" class="scroll">Cont&aacute;ctanos</a></li>-->
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
		<h3 class="title">Acreditación de Proveedores<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/10.jpg')}}" class="swipebox"><img src="{{asset('images/10.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/11.jpg')}}" class="swipebox"><img src="{{asset('images/11.jpg')}}" width="220" height="220"></a>
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
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h5 style="text-align:justify;">La Superintendencia de Servicios de Certificación Electrónica (SUSCERTE), en uso de las atribuciones conferidas en el Decreto Ley de Mensaje de Datos y Firma Electrónica, de fecha 10 de febrero de 2001, publicado en la Gaceta Oficial N° 37.148, del 28 de febrero del 2001; el cual tiene por objeto entre otros, otorgar y reconocer eficacia y valor jurídico a la Firma Electrónica, al Mensaje de Datos y a toda información inteligible, atribuible a personas naturales o jurídicas, públicas o privadas; y enmarcada en su misión de fortalecer el Sistema Nacional de Seguridad de la Información e impulsar como Órgano Rector, el funcionamiento confiable del Sistema Nacional de Certificación Electrónica. En febrero de 2007, creó laAutoridad Certificadora Raíz del Estado Venezolano, la cual es la encargada de acreditar a todo Proveedor de Servicios de Certificación Electrónica (PSC), que se encuentre jurídica y técnicamente apto para operar en el esquema jerarquizado de la Cadena de Confianza de la República Bolivariana de Venezuela. </h5>

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
		<h3 class="title">Proceso de Acreditación<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/12.jpg')}}" class="swipebox"><img src="{{asset('images/12.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/71.jpg')}}" class="swipebox"><img src="{{asset('images/71.jpg')}}" width="220" height="220"></a>
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
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h5 style="text-align:justify;">En tal sentido, el 18 de julio de 2008, culminó exitosamente el proceso de acreditación de dos Proveedores de Servicios de Certificación Electrónica (PSC); y en fecha 17 de julio de 2009, procedió a otorgar la renovaron de la acreditación a los mismos; vale decir, a la Fundación Instituto de Ingeniería para Investigación y Desarrollo Tecnológico (FII), y la Empresa Proveedores de Certificados PROCERT C.A; con lo cual ambos proveedores pueden emitir certificados a la Administración Pública y al Sector Privado, indistintamente. En consecuencia, los Certificados Electrónicos emitidos por cualquiera de los PSC anteriormente mencionados, constituirán plena prueba, en el entendido que la Ley de Mensaje de Datos y Firma Electrónica, confiere a los Mensajes de Datos (Documentos Electrónicos) y a la Firma Electrónica el mismo valor legal y eficacia probatoria que a la firma autógrafa. </h5>

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
		<h3 class="title">PSC<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/81.jpg')}}" class="swipebox"><img src="{{asset('images/81.jpg')}}" width="220" height="220"></a>
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
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h5 style="text-align:justify;">Los Proveedores de Servicios de Certificación (PSC), son los encargados de emitir Certificados Electrónicos con validez en la Cadena de Confianza Nacional, y en consecuencia los únicos legitimados de conformidad con el ordenamiento jurídico vigente, para ofrecer ambos, Servicios de Certificación Electrónica tanto a los usuarios del Sector Público como a los del Sector Privado.</h5>


<h5 style="text-align:justify;">La Certificación Electrónica aporta beneficios a la comunidad en general, en el ámbito de la Identidad Digital, fomentando la rápida y segura incorporación de las nuevas tecnologías en las actividades de empresas, ciudadanos y Administración Pública; debido a que el Certificado Electrónico (documento electrónico emitido por un PSC), vincula a un signatario con su Identificación Electrónica Única (Clave Pública) y con su Firma Electrónica, entendida como el conjunto de datos matemáticos que vincula de manera unívoca un documento al signatario garantizando su integridad y autenticidad.
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


<!-- //banner-bottom -->
<!-- services -->

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
			<div class="col-md-4 list-gds text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s" id="clickeable" onclick="location.href='http://www.vencert.gob.ve';">
				<span class="glyphicon glyphicon-folder-open icon" aria-hidden="true"></span>
				<h4> Seguridad de la Información</h4>
				<!--<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, 
					suscipit nec mauris. Suspendisse commodo tempor sagittis</p>-->
			</div>
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span>