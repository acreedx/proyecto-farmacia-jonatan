<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
  <hr>  
  <center><h1 style="color: red;">Listar Usuarios</h1></center>
    <hr>
    <center>
      
 <a href="examenpgweb.html">Volver al menu principal</a>
 <a href="./crear.html">Crear nuevo usuario</a>

    <table border="1">
 <tr>
  <td> Correo </td> 
  <td> Password </td>
  <td> Nombre </td> 
  <td> Apellido </td> 
  <td> Editar </td> 
  <td> Eliminar </td> 
</tr> 

  <?php

  include("../conexion.php");
  $consulta = "select * from `usuarios` where estado = 1";
  $resultado = $conn->query($consulta);

  while ($fila = $resultado->fetch_array()){
   echo "<tr>";
   echo "<td>$fila[1]</td> ";
   echo "<td>$fila[2]</td> ";
   echo "<td>$fila[3]</td> ";
   echo "<td>$fila[4]</td> ";
   echo "<td><a href= './editar.php/?Id=$fila[0]'>Editar</a></td> ";
   echo "<td><a href= './eliminar.php/?Id=$fila[0]'>Eliminar</a></td> ";
   echo "</tr>";
  }
?></center>
    </main>
</body>
</html>