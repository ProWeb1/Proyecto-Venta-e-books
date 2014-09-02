<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>formulario Mensajes</title>
	</head>
	<body>
		<form action="insertMensaje.php" method="post" >
			<p>
				Nombre: <input type="text" name="nombre" autofocus required /></br>
				e-mail: <input type="text" name="email" autofocus required /></br>
				Asunto: <input type="text" name="asunto" autofocus required /></br>
				Mensaje: <textarea name="mensaje" autofocus required></textarea>
			</p>
			<input type="submit" value="Enviar!" />
		</form>
	</body>
</html>