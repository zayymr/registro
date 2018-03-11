<html>
<head>
<link rel="stylesheet" type="text/css"  href="css/alta_registro.css">
<title>Alta de usuarios</title>
</head>
<body>
<h2>Registro de usuarios</h2>
<p>Los datos se registraron correctamente </p>
<?php

$con = pg_connect("host=127.0.0.1 port=5432 dbname=bdregistro user=registro_user password=holamundo123");

if (!$con)
{
	echo "<center>Problemas con la Conexion a la Base de Datos</center>";
	exit;
}

$query = "INSERT INTO usuarios VALUES
	('$_POST[id_usuario]','$_POST[nombre]','$_POST[apaterno]','$_POST[tel]')";

pg_query($query);

echo "<h4>El id recibido es: </h4>" . $id_usuario = $_POST['id_usuario'] . "<br/>";
echo "<h4>El nombre recibido es: </h4>" . $nombre = $_POST['nombre'] . "<br/>";
echo "<h4>El apellido paterno recibido es: </h4>" . $apaterno = $_POST['apaterno'] . "<br/>";
echo "<h4>El telefono recibido es: </h4>" . $tel = $_POST['tel'] . "<br/>";
?>
<br/>
<a href="http://www.registro.unam.mx/registro.php">Volver al formulario</a> 
</body>
</head>
</html>
