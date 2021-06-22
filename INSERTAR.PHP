<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$nombre = $_POST['txtNombre'];

	$sentencia = $bd->prepare("INSERT INTO alumno(nombre) VALUES (?);");
	$resultado = $sentencia->execute([$nombre]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>
