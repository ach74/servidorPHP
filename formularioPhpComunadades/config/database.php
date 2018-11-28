<?php
$usuario="daw2a";
$contraseña="abc123.";
try {
    $conn = new PDO('pgsql:dbname=daw2a_comunidades host=adminer.randion.es', $usuario, $contraseña);
    if ($conn) {
		echo "Conexion con exito a la base de datos.";
    }
} catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
    phpinfo();
}
/*

*/
?>