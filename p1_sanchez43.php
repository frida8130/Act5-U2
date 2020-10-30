<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 1 de Frida Sanchez</h3>
				<article class="articulos">	
					<figure>
					<img src="imagenes/eje1.PNG" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p5_sanchez_43_php /eje1.php" ;
					?>
					<h4>P1 Explicacion del codigo</h4><br>
					<p>
				En mi primer codigo manda  redondeo y calculo del iva,
				este problema nos tiene un precio y un iva determinado,
				lo cual hace es sacar el calculo,de esos dos y nos manda 
				a una pantalla en la cual nos dice el precio,el iva y asi mismo el resultado.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>