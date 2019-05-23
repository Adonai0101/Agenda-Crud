<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/card.css">
    <title>Domicilio</title>
</head>
<body>
    <header>
        <h1>Domicilio</h1>
    </header>
    
    <div class = "card">
    <?php
        include "conexion.php";
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = 'SELECT * FROM `agenda` WHERE id ='.$id.'';
            $conca = "hola"."atodos"; 
            $resultados = $conexion -> query($sql);

                    while($res = $resultados -> fetch_array(MYSQLI_BOTH) ){
                        echo'
                        <h1>Nombre: '.$res['nombre'].'</h1>
                        <h1>Calle: '.$res['calle'].'</h1>
                        <h1>#'.$res['numero'].'</h1>
                        <h1>Colonia: '.$res['colonia'].'</h1>
                        <h1>Telefono: '.$res['telefono'].'</h1>
                        <h3>Nota: '.$res['nota'].'</h3>
                        ';

            }     
        }
    ?>
        <a href="../index.php">Regresar</a>
    </div>
    
</body>
</html>