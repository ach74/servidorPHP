<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// Iniciamos la sesión o recuperamos la anterior sesión existente

session_start();

// En cada visita añadimos un valor al array "visitas"

$_SESSION['visitas'][] = mktime();

?>  


</body>
</html>