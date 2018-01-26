<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tarjeta De Red Inalambrica</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="imagenes/favicon.png" >
</head>
<body id="diez">
	<div class="texto">
	<div class="intro">
		Tabla de formulario
	</div>

	<table>
		<tr>
			<td colspan="3" rowspan="" headers="" class="gris" id="titulo">DATOS PERSONALES</td>
		</tr>

		<tr id="escrito">
			<td colspan="" rowspan="" headers="" id="mediano">Nombre</td>
			<td colspan="" rowspan="" headers="">Apellido</td>
			<td colspan="" rowspan="" headers="" id="largo">Contraseña</td>
		</tr>

		<tr id="enviado">
			<td colspan="" rowspan="" headers="" class="gris" id="mediano"><?php
				echo $_GET['nombre'];
				?></td>
			<td colspan="" rowspan="" headers="" class="gris"><?php
				echo $_GET['apellido'];
				?></td>
			<td colspan="" rowspan="" headers="" class="gris" id="largo"><?php
				echo $_GET['contra'];
				?></td>

		</tr>
		<tr id="titulo">
			<td colspan="3" rowspan="" headers="">ENCUESTA</td>
		</tr>

		<tr id="escrito">
			<td colspan="3" rowspan="" headers="" class="gris" id="mediano">Página Visitada</td>
		</tr>
		<tr id="enviado">
		<td colspan="3" rowspan="" headers="" id="mediano"><?php
				echo $_GET['aficiones'];
				?></td>
			</tr>

			<tr id="escrito">
			<td colspan="3" rowspan="" headers="" class="gris">Nivel Satisfactorio</td>
		</tr>
			<tr id="enviado">
			<td colspan="3" rowspan="" headers=""><?php
				echo $_GET['gusto'];
				?></td>
			</tr>

			<tr id="escrito">
			<td colspan="3" rowspan="" headers="" class="gris" id="largo2">Comentario</td>
		</tr>
			<td colspan="3" rowspan="" headers="" id="largo"><?php
				echo $_GET['comentarios'];
				?></td>

		</tr>


	</table>
</div>
</body>
</html>