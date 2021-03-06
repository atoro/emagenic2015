<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Desarrollo de páginas web en Rancagua - Emagenic - Diseño de sitios web</title>
    <meta name="description" content="Desarrollamos sitios web a medida, sin plantillas ni programas que vuelven su diseño pesado. Nuestro fuerte es html5, css3 y php">
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="shortcut icon" href="imagenes/icon.png">
</head>
<body>
	<a href="clientes" class="zclientes">Acceso Clientes</a>
	<header>
		<figure class="logo">
			<a href="http://www.emagenic.cl/new">
				<img src="imagenes/logo.png" alt="logo emagenic">
			</a>
		</figure>
		<label for="show-menu" class="show-menu"><img src="imagenes/menu.png" alt="icono menu"></label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="menu">
			<li><a href="http://www.emagenic.cl/new">Inicio</a></li>
			<li><a href="desarrolloweb">Desarrollo Web</a></li>
			<li><a href="clientes">Clientes</a></li>
			<li><a href="novedades">Novedades</a></li>
			<li><a href="#contacto">Contacto</a></li>
		</ul>
		<a href="carrocompras">
		<div class="carro">
			<div class="imgcarro">
				<div class="numero">0</div>
			</div>
		</div>
		</a>
	</header>
	<section class="slide">
	  <div class="texto_slide">
			<h1>Desarrollo de Sitios Web</h1>
			<h2>Desarrollamos sitios web, a medida, en HTML5 y sin Plantillas desde Rancagua para Chile y el Mundo.</h2>
			<h3>Contenido Autoadministrable y seguro para garantizar la presecia de su empresa en la web</h3>
		<p>Vamos a Trabajar Juntos</p>
		  <a href="#servicios" class="comencemos">COMENCEMOS</a>
		  <a href="#contacto" class="baja">
			  <img src="imagenes/bajar.png" alt="icono bajar">
		  </a>
		</div>
	</section>
	<div id="servicios">
		<section class="servicios">
			<a class="servicio" href="desarrolloweb">
				<h2>Desarrollo Web</h2>
				<p>Desarrollo de sitios web 
				a medida para su exito 
				empresarial y posicionamiento</p>
				<figure class="vermas">
					<img src="imagenes/vermas.png" alt="icono ver mas">
				</figure>
			</a>
			<a class="servicio" href="disenografico">
				<h2>Diseño Gráfico</h2>
				<p>Imagen corporativa y todo 
				lo que la compone  
			    diseñada por profesionales.</p>
				<figure class="vermas">
					<img src="imagenes/vermas.png" alt="icono ver mas">
				</figure>
			</a>
			<a class="servicio" href="webhosting">
				<h2>Web Hosting</h2>
				<p>Hosting seguro y confiable 
				es la clave para la estabilidad 
				de todo.</p>
				<figure class="vermas">
					<img src="imagenes/vermas.png" alt="icono ver mas">
				</figure>
			</a>
			<a class="servicio" href="marketingonline">
				<h2>Marketing Online</h2>
				<p>Posicionamiento orgánico, 
				campaña AdWords y 
				social media</p>
				<figure class="vermas">
					<img src="imagenes/vermas.png" alt="icono ver mas">
				</figure>
			</a>
			<a class="servicio" href="webapp">
				<h2>Web App</h2>
				<p>Necesita acceder a información 
				desde sus móviles, 
				desarrollemos una a medida.</p>
				<figure class="vermas">
					<img src="imagenes/vermas.png" alt="icono ver mas">
				</figure>
			</a>
		</section>
	</div>
	<section class="crear bounce">
		<article class="web">
			<h2>Crear una Página Web</h2>
			<p>Somos una empresa que se dedica al desarrollo y diseño de páginas web en Rancagua para Chile y el mundo. Estamos ubicados en la sexta region, pero contamos con un sistema de venta y soporte  que nos permite atender cualquier requerimiento de otras regiones. <br>
			<br>
			Muchas empresas ofrecen el desarrollo de su página web en un par de horas por un costo muy bajo, pero yo les digo, ¿Cuánto tiempo ha trabajado en la creación de su empresa?, ¿Cuánto trabajo y esfuerzo ha invertido en esta para que alguien haga su presentación en internet en tan sólo un par de horas? La verdad es que esto segun nosotros debe mas atención. <br> 
			<br>
			Imagine que como usted, existen muchas empresas que están tratando de mejorar sus ventas y están dando a conocer sus producto a través del desarrollo de su página web, quien cautive mejor a los clientes y aparezca en mejor posición en google será quien obtenga los mejores resultados de venta. Es importante recordar, que el mercado es frío y carece de sentimientos, por lo que la estrategia es la clave del éxito. <br> 
			<br>
			Como empresa con años en el rubro, le ofrecemos entre otros servicios, hacer un análisis exhaustivo de sus productos y de su mercado, creando la mejor estrategia desde el punto de vista de la experiencia de usuario y “usabilidad”, ofreciendo el desarrollo de una página web posicionable en buscadores, que sea de fácil uso y navegación, en donde la presentación de su sitio, optimice la conversión de sus clientes.</p>
		</article>
	</section>
	<section id="contacto">
		<div class="formulario">
			<h3>Contactános</h3>
			<form action="index.php" method="post" onSubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','Telefono','','R','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">
		        <input name="Nombre" type="text" class="input" id="Nombre" placeholder="Nombre"/>
		        <input name="Mail" type="text" class="input" id="Mail" placeholder="E-mail"/>
		        <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Teléfono"/>  
		        <textarea name="consulta" id="consulta" class="mensaje" placeholder="Mensaje"></textarea>
		        <input class="enviar" name="Enviar" type="submit" value="Enviar" />
		    </form>
		</div>
		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.4187482632415!2d-70.74338899999996!3d-34.16121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966343146b9bbee7%3A0x6d92521a4bedf258!2sEmagenic+Ltda!5e0!3m2!1ses!2scl!4v1418486617738" width="100%" height="700" frameborder="0" style="border:0"></iframe>
		</div>
	</section>
	<section class="pagos">
		<div class="contenido_pagos">
			<h3>Formas de Pago</h3>
			<p>Paga ahora con tus tarjetas bancarias y obten miles de beneficios</p>
			<div class="pago">
				<img src="imagenes/pagos/pago1.jpg" class="bancoestado" alt="logo banco estado">
				<p>Chequera electrónica del Banco Estado 
				38171461526 a nombre de Ingeniería y 
				desarrollo Emagenic Ltda</p>
			</div>
			<div class="pago">
				<img src="imagenes/pagos/pago2.jpg" class="dineromail" alt="logo dineromail">
				<img src="imagenes/pagos/pago2.2.jpg" class="dineromail" alt="tarjetas dineromail">
			</div>
			<div class="pago">
				<img src="imagenes/pagos/pago3.jpg" class="webpay" alt="logo webpay plus">
			</div>
		</div>
	</section>
	<footer>
		<div class="centro_footer">
			<div class="menu_footer">
				<p class="lipie"><a href="desarrolloweb">Desarrollo Web</a></p>
				<p class="lipie"><a href="disenografico">Diseño Gráfico</a></p>
				<p class="lipie"><a href="webhosting">Web Hosting</a></p>
				<p class="lipie"><a href="marketingonline">Marketing Online</a></p>
				<p class="lipie"><a href="webapp">Web App</a></p>
			</div>
			<div class="contacto_emagenic">
				<p>Teléfonos: +56 72 2532645</p>
				<p>Mail: ventas@emagenic.cl</p>
				<p>Dirección: Italia 746 Rancagua Norte - Chile</p>
			</div>
			<div class="social">
				<a href="http://emagenic.blogspot.com/" target="new">
					<div class="blogger"></div>
				</a>
				<a href="https://twitter.com/emagenic" target="new">
					<div class="twitter"></div>
				</a>
				<a href="https://www.youtube.com/user/emagenicltda" target="new">
					<div class="youtube"></div>
				</a>
				<a href="https://www.linkedin.com/pub/emagenic-ltda/49/128/573?domainCountryName=&csrfToken=ajax%3A3334404176210081577" target="new">
					<div class="linkein"></div>
				</a>
				<a href="https://plus.google.com/+SitiosEmagenic/posts" target="new">
					<div class="google"></div>
				</a>
				<a href="https://www.facebook.com/Emagenic?ref=hl" target="new">
					<div class="facebook"></div>
				</a>
				<a href="skype:emagenicltda?call" target="new">
					<div class="skype"></div>
				</a>
			</div>
			<p class="pie">© 2015 Todos los derechos reservados a Ingenieria y Desarrollo Emagenic Ltda</p>
		</div>	
	</footer>

	<!-- Parallax Background Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
	    $(function() {
	        $.fn.parallax = function(options){
	            var $$ = $(this);
	            offset = $$.offset();
	            var defaults = {
	                "start": 0,
	                "stop": offset.top + $$.height(),
	                "coeff": 0.5
	            };
	            var opts = $.extend(defaults, options);
	            return this.each(function(){
	                $(window).bind('scroll', function() {
	                    windowTop = $(window).scrollTop();  
	                    if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
	                        newCoord = windowTop * opts.coeff;
	                         
	                        $$.css({
	                            "background-position": "50% "+ newCoord + "px"
	                        });
	                    } 
	                });
	            });
	        };
	        $('.slide').parallax({ "coeff":0.5 });
	    })
	</script>
	
	<!-- Ancla Script -->
	<script type="text/javascript">
	  $(function(){
	     $('a[href*=#]').click(function() {
	     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	         && location.hostname == this.hostname) {
	             var $target = $(this.hash);
	             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	             if ($target.length) {
	                 var targetOffset = $target.offset().top;
	                  $('html,body').animate({scrollTop: targetOffset - 60}, 1500);
	                 return false;
	            }
	       }
	   });
	});
	</script> 

</body>
</html>