<!DOCTYPE html>
<html>
<head>
	<title>Formulario PHP</title>
</head>
<style type="text/css">
label{
	display: block;
	margin-top:  50px;
}
</style>
<body>
	<form action="formulario.php" enctype="multipart/form-data" method="POST">
		<label for="archivoSeleccionado">Seleccione archivo: </label>
		<input type="file" name="imagen1" />
		<br>
		<label for="firtName">Firt Name :</label>
		<input type="text" name="nombre">
		<label for="LastName">Last Name :</label>
		<input type="text" name="apellido">
		<br><br>
		<input type="submit" value="Guardar">
	</form>

</body>
</html>