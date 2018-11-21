<!DOCTYPE html>
<html>
<head>
	<title>Adivina</title>
</head>
<body>


	<?php

	define("MinNum","1");

	define("MaxNum","50");

	if (isset($_POST["aleatorio"])) {			
		$numeroAlearotio = $_POST["aleatorio"];
	}else{
		$numeroAlearotio = rand(MinNum,MaxNum);
		$intentos=6;
	}

	?>

	<h2>Adivina el numero entre <?php 	echo MinNum." y " . MaxNum;?></h2>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<input type="number" name="aleatorio" min="1" max="50" value="<?php echo $numeroAlearotio;?>"><br>

		<input type="number" name="quantity" min="1" max="50"><br>

		<input type="submit" name="submit" value="Submit Form"><br>

	</form>


	<form method="post" name="nuevo-numero">	
		<input type="submit" name="submit" value="Reiniciar">
	</form>

	<br>

	<?php 


	//echo numeroAlearotio . "<br>";


	if(isset($_POST['submit'])){

		$numero=$_POST["quantity"];

		if ($numeroAlearotio==$numero) {

			echo "Lo has adivinado el numero aleatorio es <br>";

		}elseif ($numeroAlearotio>$numero) {

			echo "El numero es bajo<br>";
			//$intentos--;
		}elseif ($numeroAlearotio<$numero) {

			echo "Numero introduciso mayor al aleatorio<br>";
			//$intentos--;
		}

		//echo "$intentos";
		/*if ($intentos==0) {
			echo "Has perdido<br>";
		}*/
		
	}

	?>

</body>
</html>