<?php
    include("../conexion.php");
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rolId = 1;
    $estado = 1;
    $consulta = "INSERT INTO `usuarios` (Correo, Password, Nombre, Apellido, Roles_Id, Estado) 
    VALUES ('$correo', '$password', '$nombre', '$apellido', $rolId, $estado)";
    if($resultado = $conn->query($consulta))
    {
        echo "<br> Usuario insertado";
    }
    else
    {
        echo "<br> Error al insertar el usuario";
    }
    mysqli_close($conn);
?>