<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Desarrollo de sitios web - Plan 1 - Emagenic Ltda</title>
    <meta name="description" content="Sitio web administrable y económico, con innumerables posibilidades de crecer y posicionar su empresa en google, hasta 4 secciones, noticias y contacto">
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<link rel="shortcut icon" href="../imagenes/icon.png">
</head>
<body>
	<a href="../clientes" class="zclientes">Acceso Clientes</a>
	<header>
		<figure class="logo">
			<a href="http://www.emagenic.cl/new">
				<img src="../imagenes/logo.png" alt="logo emagenic">
			</a>
		</figure>
		<label for="show-menu" class="show-menu"><img src="../imagenes/menu.png" alt="icono menu"></label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="menu">
			<li><a href="http://www.emagenic.cl/new">Inicio</a></li>
			<li><a href="index.php">Desarrollo Web</a></li>
			<li><a href="portafolio.php">Portafolio</a></li>
			<li><a href="frontend.php">Frontend</a></li>
			<li><a href="newsletter.php">Newsletter</a></li>
			<li><a href="landingpage.php">Landing Page</a></li>
			<li><a href="#contacto">Contacto</a></li>
		</ul>
		<a href="../carrocompras/index.php">
			<div class="carro">
				<div class="imgcarro">
					<div class="numero">0</div>
				</div>
			</div>
		</a>
	</header>
	<section class="slide_plan1">
		<div class="texto_slide">
			<h1>Plan 1 - Inicia</h1>
			<h3>
            Muy practico y con ilimitadas posibilidades de competir por posicionamiento contra las grandes paginas, esto gracias a que incorpora una plataforma de noticias y novedades que le permiten escribir innumerables artículos sobre sus servicios, productos y experiencias de sus clientes.
            
            
            </p>
			
			<a href="#detalleplan" class="baja">
				<img src="../imagenes/bajar.png" alt="icono bajar">
			</a>
		</div>
	</section>
	<section class="tuplan">
		<div class="contenido_centro">
			<h3>El Plan 1 es el plan preferido de las micro empresas, es un plan económico</h3>
			<p>
			<br>	
			Este plan incorpora una sección de contacto que le permite a sus clientes enviar consultas las cuales llegan directamente a su correo electrónico empresaria. Además    incorpora 4 secciones a su elección de la gama estándar, la cual se detallara a continuación. Lo mas importante de este plan es que a medida que su negocio o necesidades crece se puede ampliar al plan 2 o 3, o incluso incorporar plataformas de la gama especial.</p>
		</div>
	</section>
	<div id="detalleplan">
		<section class="detalleplan">
			<div class="web">
				<div class="bloque">
					<h3>Secciones de Gama Estándar</h3>
					<p>Inicio - Quienes somos - Servicios - Productos - Ubicación con mapa de google
					Link de interés - Galería de fotos - Galería de vidéos</p>
				</div>
				<div class="bloque">
					<h3>Secciones de Gama Alta</h3>
					<p>Carro de compras - Formulario de orden de compras - Solicitud de cotización
					Sistema de compra y venta - Plataforma de estudio: a pedido</p>
				</div>
				<div class="bloque">
					<h3>Clientes Frecuentes</h3>
					<p>Micro empresas - Organizaciones deportivas - Pymes de Servicios
					Pymes de comercialización - Bloggers</p>
				</div>
			</div>
			<div class="valor">
				<h3>Valor Único: $200.000</h3>
				<a href="#">AGREGAR AL CARRO</a>
			</div>
		</section>
	</div>

	<section id="contacto">
		<div class="formulario">
			<h3>Contactános</h3>
			<form action="../index.php" method="post" onSubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','Telefono','','R','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">
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
				<img src="../imagenes/pagos/pago1.jpg" class="bancoestado" alt="logo banco estado">
				<p>Chequera electrónica del Banco Estado 
				38171461526 a nombre de Ingeniería y 
				desarrollo Emagenic Ltda</p>
			</div>
			<div class="pago">
				<img src="../imagenes/pagos/pago2.jpg" class="dineromail" alt="logo dineromail">
				<img src="../imagenes/pagos/pago2.2.jpg" class="dineromail" alt="tarjetas dineromail">
			</div>
			<div class="pago">
				<img src="../imagenes/pagos/pago3.jpg" class="webpay" alt="logo webpay plus">
			</div>
		</div>
	</section>
	<footer>
		<div class="centro_footer">
			<div class="menu_footer">
				<p class="lipie"><a href="../desarrolloweb">Desarrollo Web</a></p>
				<p class="lipie"><a href="../disenografico">Diseño Gráfico</a></p>
				<p class="lipie"><a href="../webhosting">Web Hosting</a></p>
				<p class="lipie"><a href="../marketingonline">Marketing Online</a></p>
				<p class="lipie"><a href="../webapp">Web App</a></p>
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
	        $('.slide_plan1').parallax({ "coeff":0.5 });
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