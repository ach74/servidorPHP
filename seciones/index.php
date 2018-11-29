<?php
session_start();
?>
<html>
<head>
<title>Las sesiones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><?php
if(isset($_POST['enviar'])){
if(empty($_POST['usuario']) || empty($_POST['password']))
echo 'Debes llenar todos los datos';
elseif($_POST['usuario']=="test" and $_POST['password']=="test"){
$_SESSION['usuario']=$_POST['usuario'];
$_SESSION['password']=$_POST['password'];
echo 'Te haz loguedo como '.$_SESSION['usuario'];
}
}
?></td>
<td rowspan="2"><form name="login" method="post" action="index.php">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>Usuario:</td>
<td><input name="usuario" type="text" id="usuario"></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr align="center">
<td colspan="2"><input name="enviar" type="submit" id="enviar" value="Enviar"></td>
</tr>
</table>
</form></td>
</tr>
<tr>
<td><a href="segura.php">PAGINA SEGURA</a></td>
</tr>
</table>
</body>
</html>