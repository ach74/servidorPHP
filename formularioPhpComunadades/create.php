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
			<h1>Nueva Comunidad</h1>
		</div>

		<?php
		if($_POST){

    // include database connection
			include 'config/database.php';

			try{

        // insert query
				$query = "INSERT INTO Comunidades SET CIF=:Cif, nombre=:nombre, pais=:pais, direccion=:direccion,Control_de_ingresos=:Control_de_ingresos,Control_de_gastos=:Control_de_gastos,Moneda=:moneda,Ver_cuentas=:Ver_cuentas,Notificaciones=:notificaciones,Fecha_creacion=:fechaCreacion";

        // prepare query for execution
				$stmt = $conn->prepare($query);

        // posted values
				$CIF=htmlspecialchars(strip_tags($_POST['CIF']));
				$nombre=htmlspecialchars(strip_tags($_POST['nombre']));
				$pais=htmlspecialchars(strip_tags($_POST['pais']));
				$direccion=htmlspecialchars(strip_tags($_POST['direccion']));
				$controlGastos=htmlspecialchars(strip_tags($_POST['controlGastos']));
				$controlIngresos=htmlspecialchars(strip_tags($_POST['controlIngresos']));
				$moneda=htmlspecialchars(strip_tags($_POST['moneda']));
				$notificaciones=htmlspecialchars(strip_tags($_POST['notificaciones']));
				$verCuentaComunidad=htmlspecialchars(strip_tags($_POST['verCuentaComunidad']));

        // bind the parameters
				$stmt->bindParam(':Cif', $CIF);
				$stmt->bindParam(':nombre', $nombre);
				$stmt->bindParam(':pais', $pais);
				$stmt->bindParam(':direccion', $direccion);
				$stmt->bindParam(':Control_de_gastos', $controlGastos);
				$stmt->bindParam(':Control_de_ingresos', $controlIngresos);
				$stmt->bindParam(':moneda', $moneda);
				$stmt->bindParam(':Notificaciones', $notificaciones);
				$stmt->bindParam(':Ver_cuentas', $verCuentaComunidad);

        // specify when this record was inserted to the database
				$fechaActual=date('Y-m-d H:i:s');
				$stmt->bindParam(':fechaCreacion', $fechaActual);

        // Execute the query
				if($stmt->execute()){
					echo "<div class='alert alert-success'>Record was saved.</div>";
				}else{
					echo "<div class='alert alert-danger'>Unable to save record.</div>";
				}

			}

    // show error
			catch(PDOException $exception){
				die('ERROR: ' . $exception->getMessage());
			}
		}
		?>

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
					<td><input type='file' name='imagen' class='form-control'></td>
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
					<td><select name="notificaciones" class='form-control'>
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