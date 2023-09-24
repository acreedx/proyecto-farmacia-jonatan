<?php
    include("../conexion.php");
    $Id = $_GET['Id'];
    $estado = 0;
    $consulta = "UPDATE usuarios
    SET Estado ='$estado'
    WHERE Id='$Id'";
    
    if($consulta = $conn->query($consulta))
    {
        header("Location: ../index.php");
        exit;
    }
    else
    {
        echo "<br> Error al modificar el usuario";
    }
    mysqli_close($conn);
?>