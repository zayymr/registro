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
	<label for="id_usuario">Numero de cuenta:</label>
	<input type="text" name="id_usuario" />
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" />
    </div>
    <div>
	<label for="apaterno">Apellido Paterno:</label>
	<input type="text" name="apaterno" />
    </div>
    <div>
	<label for="tel">Telefono:</label>
	<input type="text" name="tel" />
    </div>	
    <div>
	<input type="submit" value="Enviar" />
    </div>
</form>
</body>
</html>

