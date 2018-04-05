<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css">
<title> Iniciar sesion </title> 
</head>
<body>
<?php
//Se reinicia la sesión para evitar acceso no autorizado
session_start();
$_SESSION['pag']=0;

//Se revisa si no hubo un error en el usuario y contraseña anteriormente o la consulta a la bd
if ($_SESSION['error']==1){
	?><font color="red">Usuario y/o contraseña incorrectos</font><?php
	$_SESSION['error']=0;
}
else if ($_SESSION['error']==2){
	?><font color="red">Hubo un error al acceder a la base de datos</font><?php
}
?>
<h2>Iniciar sesion</h2>
<p>Ingresa los siguientes datos: </p>
<form action="autenticar.php" method="post">
<p>Usuario: </p><input type="text" name="usuario" autocomplete="off"/>
<p>Contraseña: </p><input type="password" name="contrasena" autocomplete="off"/><br>
<input type="submit" value="Ingresar"/>
</form>
</body>
</html>
