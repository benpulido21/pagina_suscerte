
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
			<li><a href="#about" class="scroll">Normativas</a></li>
			<li><a href="#leyes" class="scroll">Leyes</a></li>
			<li><a href="#documentacion" class="scroll">Documentación</a></li>
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
		<h3 class="title">Normativas<span></span></h3>
		<div class="adt_grids">
		<div style="overflow-x:auto;">
		<table align="center" border="0" width="1000">
			<tr>
			<td><a href="{{asset('pdf/normas/norma-22-2008.pdf')}}"><img src="{{asset('images/norma-022.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/suscerte_-_norma_027-guia_acredita_v3_28abril_2014-firmado.pdf')}}"><img src="{{asset('images/norma-027.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/norma_032.pdf')}}"><img src="{{asset('images/normas-032.png')}}"/></a></td>
</tr>
<tr>
			<td><a href="{{asset('pdf/normas/norma_n034-proc_insp_ord_y_ext_psc-firmado.pdf')}}"><img src="{{asset('images/norma-034.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/suscerte_-_norma_040-firmado.pdf')}}"><img src="{{asset('images/norma-040.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/suscerte_-_norma_043.pdf')}}"><img src="{{asset('images/norma-043.png')}}"/></a></td>
</tr>
<tr>
			<td><a href="{{asset('pdf/normas/suscerte_-_norma_045.pdf')}}"><img src="{{asset('images/norma-045.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/suscerte_-_norma_047.pdf')}}"><img src="{{asset('images/norma-047.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/norma_54.pdf')}}"><img src="{{asset('images/norma-054.png')}}"/></a></td>
</tr>

<tr>
			<td><a href="{{asset('pdf/normas/norma_059-firmado.pdf')}}"><img src="{{asset('images/norma-059.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/suscerte-norma-063.pdf')}}"><img src="{{asset('images/normas-063.png')}}"/></a></td>
  <td><a href="{{asset('pdf/normas/norma_acreditacion_pset_64-firmado.pdf')}}"><img src="{{asset('images/normas-064.png')}}"/></a></td>
</tr>

<tr>
			<td><a href="{{asset('pdf/normas/norma_tecnica_pset_65-firmado.pdf')}}"><img src="{{asset('images/norma-065.png')}}"/></a></td>
</tr>
				
		</table>
		</div>
			<!--<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv2">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/13.jpg')}}" class="swipebox"><img src="{{asset('images/13.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<!--<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/14.jpg')}}" class="swipebox"><img src="{{asset('images/14.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-heart icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<!--<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/15.jpg')}}" class="swipebox"><img src="{{asset('images/15.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-home icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
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
			<!--<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv3">
				<div class="creative">
					<h5 style="text-align:justify;">A los efectos de llevar a cabo las auditorías técnicas establecidas en el marco legal y sub legal en material de certificación electrónica para Venezuela, SUSCERTE cuenta con una base de datos de auditores acreditados, que son expertos técnicos independientes, capacitados para realizar auditorías en materia de tecnologías de información y comunicación (TIC) y con conocimientos en sistemas y procesos de certificación electrónica. El perfil general del auditor para optar a la solicitud, incluye ser profesional en sistema, computación o afines, debe tener cursos de formación o experiencia en las siguientes áreas: </h5>
<br>
</br>
<h5 style="text-align:justify;">Conocimientos básicos: redes y telecomunicaciones, equipamiento de TIC, sistemas y aplicaciones, riesgo de TI, seguridad de la información, control y auditoría TIC, infraestructura de clave pública, organización y sistemas, procesos, normas, procedimientos, estándares y mejores prácticas en TIC, certificación de datos y firmas electrónicas.
</h5>
<br>
</br>
<h5 style="text-align:justify;"></h5>
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
<div id="leyes" class="banner-bottom">
	<div class="container">
		<h3 class="title">Leyes<span></span></h3>
		<div class="adt_grids">
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/constitucion.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
			<tr>
				<td><a href="{{asset('pdf/leyes/cons.pdf')}}"><img src="{{asset('images/constitucion_d.png')}}"></a></td>
			</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/codigos.png')}}"></td>
		</tr>
		</table>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/codigos1.pdf')}}"><img src="{{asset('images/codigos1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/codigos2.pdf')}}"><img src="{{asset('images/codigos2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/codigos3.pdf')}}"><img src="{{asset('images/codigos3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/codigos4.pdf')}}"><img src="{{asset('images/codigos4.png')}}"></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/organicas.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/organicas1.pdf')}}"><img src="{{asset('images/organicas1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/organicas2.pdf')}}"><img src="{{asset('images/organicas2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/organicas3.pdf')}}"><img src="{{asset('images/organicas3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/organicas4.pdf')}}"><img src="{{asset('images/organicas4.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/organicas5.pdf')}}"><img src="{{asset('images/organicas5.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/organicas6.pdf')}}"><img src="{{asset('images/organicas6.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/organicas7.pdf')}}"><img src="{{asset('images/organicas7.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/organicas8.pdf')}}"><img src="{{asset('images/organicas8.png')}}"></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/leyes.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes1.pdf')}}"><img src="{{asset('images/leyes1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/leyes2.pdf')}}"><img src="{{asset('images/leyes2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes3.pdf')}}"><img src="{{asset('images/leyes3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/leyes4.pdf')}}"><img src="{{asset('images/leyes4.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes5.pdf')}}"><img src="{{asset('images/leyes5.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/leyes6.pdf')}}"><img src="{{asset('images/leyes6.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes7.pdf')}}"><img src="{{asset('images/leyes7.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/leyes8.pdf')}}"><img src="{{asset('images/leyes8.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes9.pdf')}}"><img src="{{asset('images/leyes9.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/leyes10.pdf')}}"><img src="{{asset('images/leyes10.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/leyes11.pdf')}}"><img src="{{asset('images/leyes11.png')}}"></td>
			<td></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/reglamentos.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/reglamentos1.pdf')}}"><img src="{{asset('images/reglamentos1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/reglamentos2.pdf')}}"><img src="{{asset('images/reglamentos2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/reglamentos3.pdf')}}"><img src="{{asset('images/reglamentos3.png')}}"></td>
			<td></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/decretos.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/decretos1.pdf')}}"><img src="{{asset('images/decretos1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/decretos2.pdf')}}"><img src="{{asset('images/decretos2.png')}}"></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/resoluciones.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/resoluciones1.pdf')}}"><img src="{{asset('images/resoluciones1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/resoluciones2.pdf')}}"><img src="{{asset('images/resoluciones2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/resoluciones3.pdf')}}"><img src="{{asset('images/resoluciones3.png')}}"></td>
			<td></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/providencias.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/providencias1.pdf')}}"><img src="{{asset('images/providencias1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/providencias2.pdf')}}"><img src="{{asset('images/providencias2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/providencias3.pdf')}}"><img src="{{asset('images/providencias3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/providencias4.pdf')}}"><img src="{{asset('images/providencias4.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/providencias5.pdf')}}"><img src="{{asset('images/providencias5.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/providencias6.pdf')}}"><img src="{{asset('images/providencias6.png')}}"></td>
		</tr>
		</table>
		</div>
<!--<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv4">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/93.jpg')}}" class="swipebox"><img src="{{asset('images/93.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<!--<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/94.jpg')}}" class="swipebox"><img src="{{asset('images/94.jpg')}}" width="220" height="220"></a>
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
			<!--<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv5">
				<div class="creative">
					<h5 style="text-align:justify;">Conocimientos complementarios: Bases de datos y administración de datos, planificación de la gestión de áreas TIC, gestión de proyectos TI, calidad de la infraestructura y componentes TIC, calidad de gestión en TIC, niveles de servicios con uso de las TIC, administración y configuración de ambientes y de los sistemas operativos, normas, estándares y mejores prácticas en auditoría TIC, marco legal y normativo que rige las TIC y los servicios de certificación de datos y firmas electrónicas (SCDFE) en la República Bolivariana de Venezuela (RBV). Contar con certificaciones nacionales y/o internacionales en TIC o experiencia comprobable de al menos dos (2) años en auditorías. Conocer el contenido de los principios y obligaciones previstos en el Código de Ética (Norma SUSCERTE N° 47), con el propósito de asegurar adecuadamente la implementación de los estándares aplicables al realizar tareas de auditoría, mantener el más alto grado de integridad y conducta y no adoptar ningún método que pueda considerarse ilegal o contrario a los principios establecidos en dicho código. </h5>

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
<div id="documentacion" class="banner-bottom">
	<div class="container">
		<h3 class="title">Documentación<span></span></h3>
		<div class="adt_grids">
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/comunidad.png')}}"></td>
		</tr>
        </table>
        <div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/comunidad1.pdf')}}"><img src="{{asset('images/comunidad1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/comunidad2.pdf')}}"><img src="{{asset('images/comunidad2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/comunidad3.pdf')}}"><img src="{{asset('images/comunidad3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/comunidad4.pdf')}}"><img src="{{asset('images/comunidad4.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/comunidad5.pdf')}}"><img src="{{asset('images/comunidad5.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/comunidad6.pdf')}}"><img src="{{asset('images/comunidad6.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/comunidad7.pdf')}}"><img src="{{asset('images/comunidad7.png')}}"></td>
			<td></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/seguridad.png')}}"></td>	
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/seguridad1.pdf')}}"><img src="{{asset('images/seguridad1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/seguridad2.pdf')}}"><img src="{{asset('images/seguridad2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/seguridad3.pdf')}}"><img src="{{asset('images/seguridad3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/seguridad4.pdf')}}"><img src="{{asset('images/seguridad4.png')}}"></td>
		</tr>
		</table>
		</div>
		<table width="1000" border="0" align="center">
		<tr>
			<td><img src="{{asset('images/tecnica.png')}}"></td>
		</tr>
		</table>
		<div style="overflow-x:auto;">
		<table width="1000" border="0" align="center">
		<tr>
			<td><a href="{{asset('pdf/leyes/tecnica1.pdf')}}"><img src="{{asset('images/tecnica1.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/tecnica2.pdf')}}"><img src="{{asset('images/tecnica2.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/tecnica3.pdf')}}"><img src="{{asset('images/tecnica3.png')}}"></td>
			<td><a href="{{asset('pdf/leyes/tecnica4.pdf')}}"><img src="{{asset('images/tecnica4.png')}}"></td>
		</tr>
		<tr>
			<td><a href="{{asset('pdf/leyes/tecnica5.pdf')}}"><img src="{{asset('images/tecnica5.png')}}"></td>
			<td></td>
		</tr>
		</table>
		</div>
		<!--<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv4">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/93.jpg')}}" class="swipebox"><img src="{{asset('images/93.jpg')}}" width="220" height="220"></a>
						<!--<div class="icon-holder">
							<span class="glyphicon glyphicon-education icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Design</h4>
						<p class="description">Scelerisque Praesent</p>-->
					</div>
				</div>
				<!--<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<a href="{{asset('images/94.jpg')}}" class="swipebox"><img src="{{asset('images/94.jpg')}}" width="220" height="220"></a>
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
			<!--<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv5">
				<div class="creative">
					<h5 style="text-align:justify;">Conocimientos complementarios: Bases de datos y administración de datos, planificación de la gestión de áreas TIC, gestión de proyectos TI, calidad de la infraestructura y componentes TIC, calidad de gestión en TIC, niveles de servicios con uso de las TIC, administración y configuración de ambientes y de los sistemas operativos, normas, estándares y mejores prácticas en auditoría TIC, marco legal y normativo que rige las TIC y los servicios de certificación de datos y firmas electrónicas (SCDFE) en la República Bolivariana de Venezuela (RBV). Contar con certificaciones nacionales y/o internacionales en TIC o experiencia comprobable de al menos dos (2) años en auditorías. Conocer el contenido de los principios y obligaciones previstos en el Código de Ética (Norma SUSCERTE N° 47), con el propósito de asegurar adecuadamente la implementación de los estándares aplicables al realizar tareas de auditoría, mantener el más alto grado de integridad y conducta y no adoptar ningún método que pueda considerarse ilegal o contrario a los principios establecidos en dicho código. </h5>

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
		<div class="services-gds" id="apDiv6">
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</table>

			</ul>
			
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