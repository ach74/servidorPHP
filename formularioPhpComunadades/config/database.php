
<?php
$usuario="daw2a";
$contraseña="abc123.";
try {
<<<<<<< HEAD
    $conn = new PDO('pgsql:dbname=daw2a_comunidades host=adminer.randion.es', $usuario, $contraseña);
    if ($conn) {
		echo "Conexion con exito a la base de datos.";
    }
=======
    $bd = new PDO('pgsql:dbname=daw2a_comunidades host=comunidades.randion.es', $usuario, $contraseña);
>>>>>>> c879c880a71eeb629f73c9cbb90ac75208710032
} catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
    phpinfo();
}
<<<<<<< HEAD
/*

*/
?>
=======

/*
extension=php_pdo_mysql.dll
extension=php_pdo_pgsql.dll
extension=php_pdo_sqlite.dll
*/
?>
>>>>>>> c879c880a71eeb629f73c9cbb90ac75208710032
