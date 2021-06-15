<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM alumno;");
		$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de tareas</h3>
		<table>
			<tr>
				<td>Código</td>
				<td>Tareas</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($alumnos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->id_alumno; ?></td>
						<td><?php echo $dato->nombre; ?></td>
						<td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Ingresar tareas:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Tareas: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="INGRESAR TAREA"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>
