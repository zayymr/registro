<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css">
<title>Bienvenido</title>
</head>
<body>
<?php
//Verificar la sesion y de no estar iniciada redirigir a inicio
session_start();
if ($_SESSION['pag']==1) {
	echo "¡Bienvenido al menu! ".$nombre;
	$_SESSION['pag']=0;
}
else{
	header("Location: inicio.php");
}
?>
</body>
</html>
