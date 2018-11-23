<!DOCTYPE HTML>
<html>
<head>
	<title>PDO - Create a Record - PHP CRUD Tutorial</title>

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

	<!-- container -->
	<div class="container">

		<div class="page-header">
			<h1>Create Product</h1>
		</div>

		<!-- PHP insert code will be here -->

		<!-- html form here where the product information will be entered -->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<table class='table table-hover table-responsive table-bordered'>
				<tr>
					<td>CIF</td>
					<td><input type='text' name='CIF' class='form-control'/></td>
				</tr>
				<tr>
					<td>Pais</td>
					<td><input type='text' name='pais' class='form-control'/></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type='text' name='nombre' class='form-control'/></td>
				</tr>

				<tr>
					<td>Direccion</td>
					<td><input type='text' name='direccion' class='form-control' /></td>
				</tr>
				<tr>
					<td>Imagen</td>
					<td><input type='file' name='Imagen' class='form-control'></td>
				</tr>
				<tr>
					<td>Control de gastos</td>
					<td><select name="controlGastos" class='form-control'>
						<option value="si">Si</option>
						<option value="no">No</option>
					</select></td>
				</tr>
				<tr>
					<td>Control de Ingresos</td>
					<td><select name="controlIngresos" class='form-control'>
						<option value="si">Si</option>
						<option value="no">No</option>
					</select></td>
				</tr>
				<tr>
					<td>Moneda</td>
					<td><select name="moneda" class='form-control'>
						<option value="euro">Euros</option>
						<option value="dolar">Dolar</option>
						<option value="pesos">Pesos</option>
						<option value="rupias">Notificaciones</option>
					</select></td>
				</tr>
				<tr>
					<td>Notificaciones</td>
					<td><select name="Notificaciones" class='form-control'>
						<option value="todos">Todos</option>
						<option value="contactoPrincipal">Contacto Principal</option>
					</select></td>
				</tr>

				<tr>
					<td>Ver cuenta comunidad de propietarios</td>
					<td><select name="verCuentaComunidad" class='form-control'>
						<option value="todos">Todos</option>
						<option value="administrador">Administrador</option>
						<option value="mienbros">Mienbro del consejo de administracion</option>
					</select></td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type='submit' value='Save' class='btn btn-primary' />
						<a href='index.php' class='btn btn-danger'>Back to read products</a>
					</td>
				</tr>
			</table>
		</form>

	</div> <!-- end .container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>