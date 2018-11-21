<?php 



if (isset($_POST["nombre"]) AND isset($_POST["apellido"])){
	main();
}else{
	echo "Te has dejado un campo";
}

function main(){

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];

	echo $_FILES['imagen1']['name'] . "<br>" ;
	echo $_FILES['imagen1']['tmp_name']. "<br>" ;
	echo $_FILES['imagen1']['type'] . "<br>";
	echo $_FILES['imagen1']['size'] . "<br>" ;
	echo $_FILES['imagen1']['error'] . "<br>";

	$ruta_indexphp = dirname(realpath(__FILE__));
	$ruta_fichero_origen = $_FILES['imagen1']['tmp_name'];
	$ruta_nuevo_destino = $ruta_indexphp . '/img/' . $_FILES['imagen1']['name'];

	//echo $ruta_nuevo_destino . "<br>";
	echo 'Es una imagen <br>';
	if ( $_FILES['imagen1']['size']< 900000 ) {
		echo 'Pesa menos de 1 MB <br>';
		if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
			echo 'Fichero guardado con éxito <br>';

			echo "<img src='img/".$_FILES['imagen1']['name']."'>";
		}
	}
	
}

?>
