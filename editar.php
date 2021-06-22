<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM alumno WHERE id_alumno = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar tareas</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar tareas:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txt2Paterno" value="<?php echo $persona->nombre; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id_alumno; ?>">
					<td colspan="2"><input type="submit" value="EDITAR TAREA"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
