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
				<h3>Problema 2 de Frida Sanchez</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/eje2.PNG" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_sanchez_43_php /eje2.php" ;
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Este problema trata de un  for,este problema nos dice,que
						al momento de que el numero sea igual a 0 ,menor de 10 ,
						realizara tal sentencia,en este caso,nos va a repetir
						consecutivamente "La line que se presenta es:" con el numero,
						de  linea que es.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>