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

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<header class="navegar">
	<nav class="php">
		<ul>
		<div>
<img src="{{asset('images/cintillo.png')}}" alt="" border="0" width="100%" />
           </div>
			<li><a href="{{action('HomeController@index')}}">Inicio</a></li>
			<li><a href="#about" class="scroll">Quienes Somos</a></li>
			<li><a href="#services2" class="scroll">Servicios</a></li>
			<li><a href="#gallery" class="scroll">Galeria</a></li>
			<li><a href="#contact" class="scroll">Contactos</a></li>
			<li><a href="http://correo.suscerte.gob.ve">Correo</a></li>
  		</ul>
	</nav>
</header>
<div class="header_left">
			<ul class="fb_icons">
				<li><a class="fb" href="https://www.facebook.com/suscerte"></a></li>
				<li><a class="twit" href="https://twitter.com/suscerte"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>

						</ul>
					</nav>
					</header>
			</nav>
		</div>
	</div>
<!-- //header-bottom -->
<!-- banner -->
<div id="home" class="banner">
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

	<div id="services" class="services-list">
	<br>
	</br>
	<div class="header_left">
			<ul class="fb_icons">
				<li><a class="fb" href="https://www.facebook.com/suscerte"></a></li>
				<li><a class="twit" href="https://twitter.com/suscerte"></a></li>
			</ul>
			</div>
		<div class="container">
		<h3 class="title">Noticias<span></span></h3>
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
									  <?php 
									  	$i=0;
									  ?>
										  	@foreach($category as $category)

										  <li class="resp-tab-item bath" aria-controls="tab_item" role="tab"><span> {{$category->category}}</span><i></i></li> 
										  <?php $i++; ?>
										
										  @endforeach
									  </ul>	
								</div>
								<?php $j=0; ?>
							
								@foreach($news as $news)

								<div class="col-md-9 recharge-right wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
									<div class="resp-tabs-container" >
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item" >
											<div class="col-md-4 product-left">
											
											<div id ="callbacks_container">
											

								<!-- Div para el titulo de la noticia -->
											

			<div id="carrusel_text" class="rslides">
			<div><span>{{@$news->title}}</span></div>
			{{--@if(is_array($news))--}}
			{{--@foreach($news as $news)--}}

			{{--@if($news->category->category == $category->category)--}}
			<!--<div><span>{{--$category->category--}}</span></div>-->
			{{--@endif--}}
			{{--@endforeach--}}
			{{--@endif--}}
			</div>
			

			<!-- cierra el div del titulo de la noticia -->
			<script type="text/javascript">
				$(function(){
					$('#carrusel_text div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel_text div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel_text');
					},4000);

				})
			</script>				
			<div id="carrusel" class="rslides">

			{{--@if(is_array($news))--}}
			{{--@foreach($news as $news)--}}
			{{--@if($news->category->category == $category->category)--}}
				<div><img width="650" height="500" src="{{asset('images/afro12.png')}}"></div>
			{{--@endif--}}
			{{--@endforeach--}}
			{{--@endif--}}
			</div>

{{--asset($news->images->url)--}}



			</div><!-- fin del callbacks_container -->



			<script type="text/javascript">
				$(function(){
					$('#carrusel div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel');
					},4000);

				})
			</script>	


		</div>
		<div class="clearfix"></div>
</div>
<!--  <--></-->
<?php $j++; ?>
@endforeach
<!-- termina el ciclo mas externo -->
<div class="clearfix"></div>
</div>
							  </div>

												
							</div>
						</div>

	</div>
</div>
		
<!-- //banner -->
<!-- banner-bottom -->
<br>
</br>
<br>
</br>
<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Con&oacute;cenos<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv1">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/q1.JPG')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/2.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/55.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/6.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv2">
				<div class="creative">
					<h1><font color="#0000FF">¿Quienes somos?</font></h1>
					<h5 style="text-align:justify;">La Superintendencia de Servicios de Certificación Electrónica (SUSCERTE), es un servicio desconcentrado sin personalidad jurídica, creado mediante el Decreto- Ley N° 1.204 de fecha 10 de febrero de 2001, sobre Mensajes de Datos y Firmas Electrónicas, publicado en la Gaceta Oficial de la República Bolivariana de Venezuela N° 37.148 del 28 de febrero de 2001.
Es el organismo encargado de coordinar e implementar el modelo jerárquico de la infraestructura Nacional de Certificación Electrónica, también acredita, supervisa y controla a los Proveedores de Servicios de Certificación (PSC) y es el ente responsable de la Autoridad de Certificación Raíz del Estado Venezolano. Así mismo tiene como alcance proveer estándares y herramientas para implementar una tecnología de información óptima en las empresas del sector público, a fin de obtener un mejor funcionamiento y proporcionar niveles de seguridad </h5>

			  </div>
						
		  </div>
	  </div>
	</div>
			<div class="clearfix"></div>
  </div>
</div>
</div>
<div id="about2" class="banner-bottom">
	<div class="container">
		<h3 class="title">Misión y Visión</span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv3">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/66.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/7.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
				<img src="{{asset('images/5.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/pic1.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv4">
				<div class="creative">
				<h4><font color="#0000FF">Misión</font></h4>
					<h5 style="text-align:justify;">“Desarrollar y promover los Sistemas Nacionales de Seguridad de Información, Certificación Electrónica y Gestión de Incidentes Telemáticos, como herramientas habilitadoras del desarrollo tecnológico nacional, favoreciendo la inclusión del soberano en los servicios de gobierno electrónico y fortaleciendo los Sistemas de Información de los Órganos y Entes del Poder Público Nacional”.</h5>
					<br>
					</br>
					<h4><font color="#0000FF">Visión</font></h4>
					<h5 style="text-align:justify;">“Ser reconocida nacional e internacionalmente como una Institución moderna que desarrolle, impulse y motive la transformación tecnológica del país, mediante el uso masivo de plataformas informáticas seguras, enmarcada dentro de la nueva ética socialista”.</h5>
			  </div>
						
		  </div>
	  </div>
  </div>
			<div class="clearfix"></div>
</div>
	</div>
</div>

<div id="about3" class="banner-bottom">
	<div class="container">
		<h3 class="title">Valores<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv5">
				<div class="col-sm-6 bottom-gds ">
				</div>
				<div class="col-sm-6 bottom-gds ">
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/8.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/9.jpg')}}" width="220" height="220"></a>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv6">
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
			  </div>
						
		  </div>
	  </div>
  </div>
			<div class="clearfix"></div>
</div>
	</div>
</div>
<div id="about4" class="banner-bottom">
	<div class="container">
		<h3 class="title">Organigrama</span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv14">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img align="middle" src="{{asset('images/organigrama.png')}}" width="935" height="645"></a>
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
				</div>
				<div class="col-sm-6 bottom-gds ">
				</div>
				<div class="col-sm-6 bottom-gds ">
				</div>
				<div class="clearfix"></div>

			</div>
			
	  </div>
						
  </div>
</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<br>	
</br>
<div id="about5" class="banner-bottom">
	<div class="container">
		<h3 class="title">Resposabilidad Social<span></span></h3>
		<div class="adt_grids">
			<div class="col-md-5 about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" id="apDiv7">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/1_1.jpg')}}" width="220" height="220"></a>
					
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/2_1.jpg')}}" width="220" height="220"></a>
						
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/3_1.jpg')}}" width="220" height="220"></a>
						
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
					<img src="{{asset('images/3.jpg')}}" width="220" height="220"></a>
						
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<div class="col-md-7 about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s" id="apDiv8">
				<div class="creative">
					<h5 style="text-align:justify;">La noción de responsabilidad social en nuestro país tiene su raíz en el artículo 2 de la Constitución de la República Bolivariana de Venezuela, donde se prevé que “Venezuela se constituye en un Estado democrático y social de Derecho y Justicia, que propugna como valores superiores de su ordenamiento jurídico y de su actuación, (...)la responsabilidad social”
En este sentido SUSCERTE Involucra a diversos sectores de la vida nacional sobre la importancia y el uso de la tecnología de la información y comunicación al brindar una serie charlas, talleres, foros, cursos en todo el país, dirigidos a las instituciones del Estado, comunidades universidades, planteles escolares entre otros que persigue concientizar a la ciudadanía en una cultura de seguridad frente al Internet y Redes Sociales. </h5>
					<br>
					</br>
				
			  </div>
						
		  </div>
	  </div>
  </div>
			<div class="clearfix"></div>
</div>
	</div>
</div>

<!-- //services -->
<!-- services-bottom -->
<div id="services2" class="services-list">
	<div class="container">
		<h3 class="title"> Servicios<span></span></h3>
		<div class="services-gds">
			<div class="col-md-4 list-gds text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s" id="clickeable" onclick="location.href='{{action('HomeController@acreditacion')}}';">
				<!--<span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>-->
				<h4>Acreditación de Proveedores</h4>
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
				<h4>Seguridad de la Información </h4>
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
<div class="team" id="about6">
	<div class="container">
		<h3 class="title"> Equipo <span></span></h3>
		<div class="team_gds">
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Nerissa J. Aguilera A.</h4>
				<p>Superintedente</p>
			</div>
		
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Norelys Jiménez</h4>
				<p>Adjunta</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Yajaira Urbina</h4>
				<p>Directora - Recursos Humanos</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Luis Aray</h4>
				<p>Director - Administración y Servicios</p>
			</div></a>
	  </div>
  </div>
				
			
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Edgar Castro</h4>
				<p>Director - Certificación Electrónica y Criptografía</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Carlos Acosta</h4>
				<p>Director - Estandarización y Fiscalización</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Mariagabriela López</h4>
				<p>Directora - Investigación, Formación y Desarrollo</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Hector Ortiz</h4>
				<p>Director - Sistema Nacional de Gestion de Incidentes Telemáticos (VENCERT)</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Yenny Pereira</h4>
				<p>Directora - Planificación, Presupuesto y Organización</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Desconocido</h4>
				<p>Director(a) - Relaciones Institucionales</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Natasha Álvarez</h4>
				<p>Directora - Centro Nacional de Informática Forense - CENIF</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
				</div>
				<h4>Nelena Rodriguez</h4>
				<p>Directora - Asesoría Jurídica</p>
			</div>
			<div class="clearfix"></div>		
</div>
	</div>
</div>
<!-- //team -->
<!-- gallery -->
<div id="gallery" class="gallery">
	<div class="container">
		<h3 class="title"> Galeria <span></span></h3>
		<div class="gallery_gds" id="apDiv12">
			<ul class="simplefilter wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <button class="btn btn-primary btn-lg"  data-filter="all">Todo</button>	
                <button class="btn btn-primary btn-lg"  data-filter="1">Eventos</button>
                <button class="btn btn-primary btn-lg"  data-filter="2">Jornadas</button>
                <button class="btn btn-primary btn-lg"  data-filter="3">Categoria2</button>
                <button class="btn btn-primary btn-lg"  data-filter="4">Categoria3</button>				
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
	<div class="map" id="apDiv13">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.9517421108594!2d-66.89900127355854!3d10.504467256254376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a592e7618a8ef%3A0xdc89c13fe845f4a9!2sTorre+BFC!5e0!3m2!1ses!2sve!4v1467926972713" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="map-pos">
			<div class="container">
				<div class="col-md-4 map_left">
					<h3>CONTACTOS <span style="color:blue"></span></h3>
				</div>
				<div class="col-md-8 map_right text-center">
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true" style="color:blue"></span>
						<ul>
							<li>0212-5785674</li>
							<li>0212-5724732</li>
							<li>0212-5724932</li>
						</ul>
					</div>
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-send" aria-hidden="true" style="color:blue"></span>
						<ul>
							<li> Av. Andrés Bello</li>
							<li> Edificio BFC. Piso 13.</li>
							<li>VenCERT. Caracas. Distrito Capital. Venezuela</li>
						</ul>
					</div>
					<div class="col-sm-4 add_left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="color:blue"></span>
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
<div class="footer wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0.2s" id="apDiv17">
  <div class="container">
		<div class="mail_us">
			<div class="col-md-5 mail_left">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer_top text-center">
			<h2><a href="#home"><img src="{{asset('images/25.png')}}" alt=" " height="300" width="400" /></a></h2>
			<ul>
			<div style="overflow-x:auto;">
		<table border="0" align="center" width="1000">
		<thead>
<tr>
<td><li><h3><a href="">Inicio</a></h3></li></td>
<td><li><h3><a href="#about" class="scroll">Quienes Somos</a></h3></li></td>
<td><li><h3><a href="#services2" class="scroll">Servicios</a></h3></li></td>
<td><li><h3><a href="#gallery" class="scroll">Galería</a></h3></li></td>	
<td><li><h3><a href="#contact" class="scroll">Contactos</a></h3></li></td>
<tr>
	<td colspan="5"><hr>
	</td>
</tr>
</tr>
</thead>
<tbody>	
<tr>
<td><li><a href="#services" class="scroll">Noticias</a></li></td>
<td><li><a href="#about" class="scroll">Conócenos</a></li></td>
<td><li><a href="{{action('HomeController@acreditacion')}}">Acreditación de Proveedores</a></li></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><hr><li><a href="#about2" class="scroll">Misión y Visión</a></li></td>
<td><hr><li><a href="{{action('HomeController@registro')}}">Registro de Auditores</a></li></td>
<td></td>
<td></td>	
</tr>
<tr>
<td></td>
<td><hr><li><a href="#about3" class="scroll">Valores</a></li></td>
<td><hr><li><a href="{{action('HomeController@estampado')}}">Estampado de Tiempo</a></li></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><hr><li><a href="#about4" class="scroll">Organigrama</a></li></td>
<td><hr><li><a href="{{action('HomeController@forense')}}">Informática Forense</a></li></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><hr><li><a href="#about5" class="scroll">Responsabilidad Social</a></li></td>
<td><hr><li><a href="http://www.vencert.gob.ve">Seguridad de la Información</a></li></td>
<td></td>
<td></td>
</tr>
<td></td>
<td><hr><li><a href="#about6" class="scroll">Equipo</a></li></td>
<td><hr><li><a href="{{action('HomeController@biblioteca')}}">Normativas y Leyes</a></li></td>
<td></td>
</tr>
</tbody>
</table>
</div>
			</ul>
			
		</div>
	<div class="copy_right text-center">

			
			<ul class="fb_icons2">
			
			</ul>
	  </div>
		<div class="footer_top text-center">
			
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

									

