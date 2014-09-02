<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>formulario Mensaje</title>
	</head>
		<body>
			<?php
				$id=$_GET["id"];
				include_once("MensajeCollector.php");
				include_once("Mensaje.php");
				$MensajeCollectorObj = new MensajeCollector();
				foreach ($MensajeCollectorObj->readMensajes() as $c){
					if ($c->getIdMensaje() == $id)
						$ObjMensaje = $c;
				}
				//$ObjMensaje = $MensajeCollectorObj->showMensaje($id);
				/*echo "el mensaje";
				print_r($ObjMensaje);*/
			?>
			<h2>Editar Objeto Mensaje </h2>
			<form action="editarMensaje.php" method="post" >
				<p>
					Id: <input type="text" name="id" value="<?php echo $ObjMensaje->getIdMensaje(); ?>" readonly />
				</p>
				<p>
					Nombre: <input type="text" name="nombre"  value="<?php echo $ObjMensaje->getNombre(); ?>" autofocus required /></br>
					e-mail: <input type="text" name="email"  value="<?php echo $ObjMensaje->getEmail(); ?>" autofocus required /></br>
					Asunto: <input type="text" name="asunto"  value="<?php echo $ObjMensaje->getAsunto(); ?>" autofocus required /></br>
					Mensaje: <textarea name="mensaje" placeholder="<?php echo $ObjMensaje->getMensaje(); ?>" autofocus required></textarea></br>
				</p>
				<a href="indexMensaje.php">Cancelar</a>
				<input type="submit" value="Guardar" />

			</form>
		</body>
</html>