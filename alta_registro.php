<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="css/alta_registro.css">
<title>Alta Registro</title>
</head>
<body>
<?php
//Incluir archivo php de conexiòn
include 'conexion.php';

//Asignar funcion de conectar a una variable para conectar a la bd
$conn = conectar();

//Declaraciòn de variable para control de errores con los formularios
$err = 0;

//Sanitizar los formularios (quitar caracteres especiales o no pertenecientes al tipo de campo)
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apaterno = filter_var($_POST['apaterno'], FILTER_SANITIZE_STRING);
$amaterno = filter_var($_POST['amaterno'], FILTER_SANITIZE_STRING);
$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
$correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);

//Imprimir datos ingresados
echo "<h2>Registro</h2>Nombre: ".$nombre;
echo "<br>Apellido paterno: ".$apaterno;
echo "<br>Apellido materno: ".$amaterno;
echo "<br>Telefono: ".$telefono;
echo "<br>Correo: ".$correo."<br><br>";

//Validar formularios
if ($nombre) {
if(!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$nombre)){
echo "Error: Nombre invalido<br>";
$err = 1;
}
} else{
echo "El campo de nombre no puede ir vacio<br>";
$err = 1;
}

if ($apaterno) {
if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$apaterno)) {
echo "Error: Apellido paterno invalido<br>";
$err = 1;
}
} else{
echo "El campo de nombre no puede ir vacio<br>";
$err = 1;
}
if ($amaterno) {
if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$amaterno)) {
echo "Error: Apellido materno invalido<br>";
$err = 1;
}
}
if ($telefono) {
if (!preg_match('/[0-9]{8,12}/',$telefono)) {
echo "Error: Telèfono invalido<br>";
$err = 1;
}
} else{
echo "El campo de telèfono no puede ir vacio<br>";
$err = 1;
}
if ($correo) {
if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_\-]?(\.?[a-zA-Z0-9_\-])+@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/',$correo)) {
echo "Error: Correo invalido<br>";
$err = 1;
}
} else{
echo "El campo de correo no puede ir vacio<br>";
$err = 1;
}

//Insertar datos a db si no hubo errores en caso contrario indicar el error
if ($err == 0) {
//Asignar query a variable
$query = ("INSERT INTO usuarios (nombre,apaterno,amaterno,telefono,correo) VALUES ('$nombre','$apaterno','$amaterno','$telefono','$correo')");
//Ejecutar query llamando la variable de conexiòn a la bd
$process = pg_query($conn, $query);
//Informar si la query se ejecuto o no
if (!$process) {
echo "<br>No se pudo realizar el registro";
}
else {
echo "<br>El registro se ha realizado exitosamente";
}
} else{
echo "<br>El registro no se puede realizar por que algunos de los datos no son validos, vuelva a intentarlo";

}

//Cerrar la conexion a la bd
pg_close($conn);
?>
<br><br>
<form action="http://www.registro.unam.mx/registro.php">
<input type="submit" value="Regresar al formulario" />
</form>
</body>
</html>
