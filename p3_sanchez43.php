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
				<h3>Problema 3 de Frida Sanchez</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/eje3.PNG" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p5_sanchez_43_php /eje3.php" ;
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Este problema es muy parecido al segundo  ya que lo unico
						que cambia es el bucle que utlizamos,en este caso
						utilizamos el bucle while,se usa de diferente manera
						ya que aqui declaramos una variable,la cual estara dentro
						del bucle while y en caso de que la variable  sea menor a 15
						 se  repetira la oracion "El valor de  es:" junto con  el nuemero
						 hasta llegar a  lo indicado.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>