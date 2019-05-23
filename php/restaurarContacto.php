<?php 
    echo "Estas en Eliminar";
    include "conexion.php";
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql ="UPDATE agenda SET bandera = 'ok' WHERE id = $id";
        $res = mysqli_query($conexion,$sql);
        header('Location: '.$uri.'historial.php');
    }
?>