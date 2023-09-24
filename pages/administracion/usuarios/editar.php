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
  <?php

  include("../conexion.php");
  $consulta = "select * from `usuarios` where Id = 1";
  $resultado = $conn -> query($consulta);
  $fila =$resultado->fetch_array() ;

  if($fila) {
    echo "<br>";
    
    echo ' 
    <form action="../confirmarModificacion.php" method="post">
    <input type="hidden" name="id" value="'.$fila[0].'">
    <br>
    <label for="">Correo</label>        
    <input type="text" name="correo" value="'.$fila[1].'">
    <br>
    <label for="">Password</label>        
    <input type="text" name="password" value="'.$fila[2].'">
    <br>
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="'.$fila[3].'">
    <br>
    <label for="">Apellido</label>
    <input type="text" name="apellido" value="'.$fila[4].'">
    <br>
    <br>
    <input type="submit" value="Aceptar">
    <input type="reset" value="Cancelar">
    
    </form>
    ';
}
else {
    echo " no existe...";
}
?>
 <a href="examenpgweb.html">Volver al menu principal</a>
    </main>
</body>
</html>