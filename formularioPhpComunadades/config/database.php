
<?php
$usuario="daw2a";
$contraseña="abc123.";
try {
    $bd = new PDO('pgsql:dbname=daw2a_comunidades host=comunidades.randion.es', $usuario, $contraseña);
} catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
    phpinfo();
}

/*
extension=php_pdo_mysql.dll
extension=php_pdo_pgsql.dll
extension=php_pdo_sqlite.dll
*/
?>
