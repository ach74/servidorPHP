<?php
session_start();
ob_start();
$hasDB = false;
$server = 'randion.es';
$user = 'acl_use';
$pass = 'abc123.';
$db = 'acl';
//$link = mysql_connect($server,$user,$pass);


try {
    $conn = new PDO('mysqli:host=$server;dbname=$db', $user, $pass);
    echo "$conn";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


/*

if (!is_resource($link)) {   
	$hasDB = false;
	die("Could not connect to the MySQL server at localhost.");
} else {   
	$hasDB = true;
	mysql_select_db($db);
}*/
?>