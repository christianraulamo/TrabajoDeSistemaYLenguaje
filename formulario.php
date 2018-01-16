<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div class="texto">
	<div class="intro">
		Tabla de formulario
	</div>

	<table>
		<tr>
			<td colspan="3" rowspan="" headers="" id="titulo">DATOS PERSONALES</td>


		</tr>

		<tr id="escrito">
			<td colspan="" rowspan="" headers="" id="mediano">Nombre</td>
			<td colspan="" rowspan="" headers="">Apellido</td>
			<td colspan="" rowspan="" headers="" id="largo">Password</td>

		</tr>
		<tr id="enviado">
			<td colspan="" rowspan="" headers="" id="mediano"><?php
				echo $_GET['nombre'];
				?></td>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['apellido'];
				?></td>
			<td colspan="" rowspan="" headers="" id="largo"><?php
				echo $_GET['contra'];
				?></td>

		</tr>
		<tr id="titulo">
			<td colspan="3" rowspan="" headers="">ENCUESTA</td>


		</tr>
		<tr id="escrito">
			<td colspan="" rowspan="" headers="" id="mediano">Aficiones</td>
			<td colspan="" rowspan="" headers="">Utilidad</td>
			<td colspan="" rowspan="" headers="" id="largo">Comentario</td>

		</tr>
		<tr id="enviado">
			<td colspan="" rowspan="" headers="" id="mediano"><?php
				echo $_GET['aficiones'];
				?></td>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['gusto'];
				?></td>
			<td colspan="" rowspan="" headers="" id="largo"><?php
				echo $_GET['comentarios'];
				?></td>

		</tr>


	</table>
</div>
</body>
</html>