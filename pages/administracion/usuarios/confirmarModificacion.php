<?php
    include("../conexion.php");
    $Id = $_POST['id'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rolId = 1;
    $estado = 1;
    $consulta = "UPDATE usuarios
    SET Correo ='$correo',
    Password ='$password',
    Nombre ='$nombre',
    Apellido ='$apellido',
    Roles_Id ='$rolId',
    Estado ='$estado'
    WHERE Id='$Id'";
    
    if($consulta = $conn->query($consulta))
    {
        header("Location: ./index.php");
        exit;
    }
    else
    {
        echo "<br> Error al modificar el usuario";
    }
    mysqli_close($conn);
?>