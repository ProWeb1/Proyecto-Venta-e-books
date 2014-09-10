<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>formulario Mensajes</title>
	</head>
	<body>
		<form action="insertCabecera.php" method="post" >
			<p>
				Usuario: <input type="text" name="usuario" autofocus required /></br>
				Fecha: <input type="date" name="fecha" requiered="">
				Total: <input type="text" name="total" autofocus required /></br>
			</p>
			<input type="submit" value="Enviar!" />
		</form>
	</body>
</html>