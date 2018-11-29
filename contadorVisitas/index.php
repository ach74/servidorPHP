<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

// Iniciamos la sesión o recuperamos la anterior sesión existente

session_start();

// Comprobamos si la variable ya existe

if (isset($_SESSION['visitas'])){

echo $_SESSION['visitas']++;

}else{
echo $_SESSION['visitas'] = 0;

}


?>  


</body>
</html>