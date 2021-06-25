<? php 
	session_start ();
	if ( isset ( $ _SESSION [ 'nombre' ])) {
		encabezado ( 'Ubicación: index.php' );
	}
?>


<!DOCTYPE html>
<html>
<center>

<head>
	<title><strong>Iniciar sesion</strong></title>
	<meta charset="utf-9">
</head>
<body>
	<body style=" margin: 0;padding: 0;width: 70%;height: 200px;position: relative ; background: #2E9AFE;">

	<div class="login">

	<center>

		<center style="border: 1px solid #E1E1E1; border-radius: 5px;padding: 17px;width: 300px;position: absolute;top: 100%; left: 50%; transform: translate(20%,20%); background: #E0E0F8;">
			
		<form method="POST" action="loginProceso.php ">
			
			<label><em><strong>Usuario</strong></em></label>
			<input type="text" name="txtUsu">
			<br>
			<label><em><strong>Password</strong></em></label>
			<input type="password" name="txtPass">
			<br>
			<input type="submit" value="Iniciar sesión">
		</form>
	</center>
</body>
</center>
</html>
