<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

<?php 
if (isset($_POST["numero"])) {			
	$numero = $_POST["numero"];
	$intentos = $_POST["intentos"];
	$intentos--;
}else{
	$numero = rand(1,50);
	$intentos = 6;
}

?>

 <h2>Adivina el numero</h2>


 	<form name="adivina_el_numero" method="post"> 

 		<input type="text" name="adivina">

 		<input type="hidden" name="numero" value="<?= $numero ?>">

 		<input type="hidden" name="intentos" value="<?= $intentos ?>">

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
			$int=$_POST["intentos"];
			if ($adivina<$numero) {
				echo "<p> Introduce un numero mas grande</p>";
			}elseif ($adivina > $numero) {
				echo "<p> Introduce un numero mas pequeño</p>";
			}elseif ($adivina==$numero) {
				echo "<p> Correcto el numero es $adivina</p>";
			}
		}
		if ($intentos<=0) {
			echo "Has perdido";
		}
	}


	?>


</body>
</html>