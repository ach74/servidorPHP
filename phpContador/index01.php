<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

<?php 
if (isset($_POST["numero"])) {			
	$numero = $_POST["numero"];
}else{
	$numero = rand(1,50);
}

 ?>

 <h2>Adivina el numero</h2>


 	<form name="adivina_el_numero" method="post"> 

 		<input type="text" name="adivina">

 		<input type="text" name="numero" value="<?php $numero ?>">
 		<p>dsd</p>
 		<input type="submit" name="submit">
	</form><br>

	<form method="post" name="nuevo-numero">	
		<input type="submit" name="submit" value="Reiniciar">
	</form>

	<?php

	if (isset($_POST["adivina"])) {
		if ($_POST["adivina"]) {
			$adivina = $_POST["adivina"];
			$numero = $_POST["numero"];

			if ($adivina<$numero) {
				echo "<p> Introduce un numero mas grande</p>";
			}elseif ($adivina > $numero) {
				echo "<p> Introduce un numero mas pequeño</p>";
			}elseif ($adivina==$numero) {
				echo "<p> Correcto el numero es $adivina</p>";
			}
		}
	}




	?>
</body>
</html>