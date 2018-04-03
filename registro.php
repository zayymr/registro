<html>
<head>
<link rel="stylesheet" type="text/css"  href="css/registro.css">
<title> Registro de usuarios </title> 
</head>
<body>
<h2>Registro de usuarios</h2>
<p>Completa el siguiente formulario con los datos solicitados: </p>
<form action="alta_registro.php" method="post">
    <div>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" />
    </div>
    <div>
	<label for="apaterno">Apellido Paterno: </label>
	<input type="text" name="apaterno" />
    </div>
    <div>
	<label for="amaterno">Apellido Materno: </label>
	<input type="text" name="amaterno" />
    </div>
    <div>
	<label for="telefono">Telefono: </label>
	<input type="text" name="telefono" />
    </div>
    <div>
	<label for="correo">Correo: </label>
	<input type="email" name="correo" />
    </div>	
    <div>
	<input type="submit" value="Enviar" />
    </div>
</form>
</body>
</html>
