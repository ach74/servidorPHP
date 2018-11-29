<?php
// used to connect to the database

	$host = "localhost";
	$db_name = "php_beginner_crud_level_1";
	$username = "root";
	$password = "";


	//$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
	$con = new mysqli('localhost', 'root','','php_beginner_crud_level_1');
?>