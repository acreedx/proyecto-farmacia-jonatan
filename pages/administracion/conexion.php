<?php
$servidor="localhost";
$usuario="root";
$clave="";
$nombreDB="farmacia";
$conn=new mysqli($servidor, $usuario, $clave, $nombreDB);
if (mysqli_connect($servidor, $usuario, $clave, $nombreDB)){
 echo "";
}else{
 echo "Fallo en la conexion";
}
?>

