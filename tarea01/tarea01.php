<!DOCTYPE html>
<html>
<body>

<table align="center" border="2">
<tr>
  <td><strong>Contenido de $var -</strong></td>
  <td><strong>isset($var) -</strong></td>
  <td><strong>empty($var) -</strong></td>
   <td><strong>(bool) $a -</strong></td>
   <td><strong>is_null $a -</strong></td>
</tr>

<?php
function es(){
	global$var;

	unset($var);
}

$var = 0;

$q = array();

$w = array("$var = null"," $var = 0","$var = true","$var = false","$var = '0'","$var = " " ","$var ='foo'","unset($var)","$var = array()");

$a = array(null,0,true,false,"0"," ","foo",es(),$q);

for ($i=0; $i < count($a); $i++) { 

echo "<tr>";
$operaciones1 = (isset($a[$i]) ? "true" : "false");
$operaciones2 = (empty($a[$i]) ? "true" : "false");
$operaciones3 = (is_bool ($a[$i]) ? "true" : "false");
$operaciones4 = (is_null ($a[$i]) ? "true" : "false");

 echo "<td>$w[$i]</td>";

 echo "<td> $operaciones1 </td>";
 echo "<td> $operaciones2 </td>";
 echo "<td> $operaciones3 </td>";
 echo "<td> $operaciones4 </td>";

echo "</tr>";

}

?>

</table>



</body>
</html>