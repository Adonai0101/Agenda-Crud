<?php
    include "conexion.php";

    $nombre = $_POST["nombre"];
    $calle = $_POST["calle"];
    $numero = $_POST["numero"];
    $colonia = $_POST["colonia"];
    $telefono = $_POST["telefono"];
    $nota = $_POST["nota"];
    
    $insert = "INSERT INTO agenda(id, nombre, calle, numero, colonia, telefono, nota, bandera) VALUES ('NULL','$nombre','$calle','$numero','$colonia','$telefono','$nota','ok')";
    //echo($insert);

    $resultado = mysqli_query($conexion,$insert);
    if(!$resultado){
        //echo("No se registro");
    }
    else{
        //echo("usuario se registro");
    }

    mysqli_close($conexion);

    /*Regresamos a nuestra pagina agenda */
    header('Location: '.$uri.'../index.php');
    
    ?>