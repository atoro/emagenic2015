<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Carro de Compras - Emagenic Ltda</title>
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
			<li><a href="desarrolloweb">Desarrollo Web</a></li>
			<li><a href="novedades">Novedades</a></li>
			<li><a href="clientes">Clientes</a></li>
			<li><a href="#contacto">Contacto</a></li>
		</ul>
		<div class="carro">
			<div class="imgcarro">
				<div class="numero">0</div>
			</div>
		</div>
	</header>
	<section class="slide_carro">
		<div class="texto_slide">
			<h1>Carro de Compras</h1>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At optio illo impedit eveniet, beatae quam facere pariatur cupiditate nostrum alias deserunt eos labore, expedita maxime delectus ab, exercitationem eligendi vero.</h3>
			<a href="#" class="baja">
				<img src="../imagenes/bajar.png" alt="icono bajar">
			</a>
		</div>
	</section>
	<section class="tuplan">
		<div class="contenido_centro">
			<h3>Carro de Compras</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias in eius, ipsa maiores voluptate eum aliquam ea doloremque accusantium nulla, ipsam neque iusto quod! Quasi libero aspernatur labore fugit facilis.</p>
		</div>
	</section>
	<section class="carrodecompra">
		<div class="centro_carro">
			<div class="compras">
				<!-- Compra-->
				<div class="detallecompra">
					<div class="compra">
						<p class="nombre">Plan 1 Responsive</p>
						<img src="../imagenes/carrocompra.png" alt="icono carro compras">
					</div>
					<p class="categoria">Cantidad: <input name="Cantidad" class="cantidad" type="text"/></p>
					<p class="categoria">Valor: $270.000</p>
					<p class="categoria">Total: $270.000</p>
					<a href="#" class="eliminar">
						Eliminar <img src="../webhosting/imagenes/delete.png" alt="icono eliminar">
					</a>
				</div>
				<!-- Compra-->
				<div class="detallecompra">
					<div class="compra">
						<p class="nombre">Plan 1 Responsive</p>
						<img src="../imagenes/carrocompra.png" alt="icono carro compras">
					</div>
					<p class="categoria">Cantidad: <input name="Cantidad" class="cantidad" type="text"/></p>
					<p class="categoria">Valor: $270.000</p>
					<p class="categoria">Total: $270.000</p>
					<a href="#" class="eliminar">
						Eliminar <img src="../webhosting/imagenes/delete.png" alt="icono eliminar">
					</a>
				</div>
				<!-- Compra-->
				<div class="detallecompra">
					<div class="compra">
						<p class="nombre">Plan 1 Responsive</p>
						<img src="../imagenes/carrocompra.png" alt="icono carro compras">
					</div>
					<p class="categoria">Cantidad: <input name="Cantidad" class="cantidad" type="text"/></p>
					<p class="categoria">Valor: $270.000</p>
					<p class="categoria">Total: $270.000</p>
					<a href="#" class="eliminar">
						Eliminar <img src="../webhosting/imagenes/delete.png" alt="icono eliminar">
					</a>
				</div>
				<div class="totalcompra">
					<p>$270.000</p>
				</div>
			</div>
			<div class="formulario">
				<h3>Formulario de Contacto</h3>
				<form>
					<input name="Rut" type="text" class="input" id="Rut" placeholder="Rut"/>
			        <input name="Nombre" type="text" class="input" id="Nombre" placeholder="Nombre"/>
			        <input name="Direccion" type="text" class="input" id="Direccion" placeholder="Direccion"/>
			        <input name="Ciudad" type="text" class="input" id="Ciudad" placeholder="Ciudad"/>
			        <input name="Comuna" type="text" class="input" id="Comuna" placeholder="Comuna"/>
			        <input name="Giro" type="text" class="input" id="Giro" placeholder="Giro"/>
			        <input name="Mail" type="text" class="input" id="Mail" placeholder="E-mail"/>
			        <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Teléfono"/>  
			        <input class="enviar" name="Contratar" type="submit" value="Contratar" />
		    	</form>
			</div>
		</div>
	</section>
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
	        $('.slide_carro').parallax({ "coeff":0.5 });
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