<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="css/alta_registro.css">
<title>Autenticar</title>
</head>
<body>
<?php

//Incluir archivo php de conexiòn
include 'conexion.php';

//Asignar funcion de conectar a una variable para conectar a la bd
$conn = conectar();

//Sanitizar los formularios (quitar caracteres especiales o no pertenecientes al tipo de campo)
$user = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$password = md5($_POST['contrasena']);

//Imprimir datos ingresados
echo "<h2>Datos</h2>Usuario: ".$user;
echo "<br>Contraseña: ".$password;

//Consulta (asignar query a consulta)
$query = ("SELECT password FROM usuarios WHERE user_name = '$user'");

//Ejecutar query llamando la variable de conexion a la bd
$process = pg_query($conn, $query);

//Informar si la query se ejecuto o no
if  (!$process) {
	$_SESSION['error']=2;
}
else {
//Si funciono la query comparar la contraseña
	$result = pg_fetch_result($process, 0, 0);
	if ($result == $pass){
	
	//Si la contraseña es correcta redirigir a menu de lo contrario a inicio
		session_start();
		$_SESSION['pag']=1;
		header("Location: menu.php");
	}
	else {
		session_start();
		$_SESSION['error']=1;
		header("Location: inicio.php");
	}
}

//Cerrar la conexion a la bd
pg_close($conn);

?>
<br><br>
</body>
</html>

