<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <title>Historial</title>
</head>
<body>
    <header id="elh">
        <h1>Historial de Domicilios</h1>
    </header>
    <?php
        include "conexion.php";
        $sql = "SELECT * FROM agenda where bandera = 'delete'";
        $resultados = $conexion -> query($sql);
    ?>
    <div class="cont-tabla">
                <table>
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Calle</th>
                            <th>Numero</th>
                            <th>Colonia</th>
                            <th>Telefono</th>
                            
                            <th>Acciones</th>
                          </tr>
                        </thead>

                <?php
                /*
                    include "conexion.php";
                    $sql = "SELECT * FROM agenda where bandera = 'delete'";
                    $resultados = $conexion -> query($sql);
                */
                    while($res = $resultados -> fetch_array(MYSQLI_BOTH) ){
                        echo'
                        <tr>
                        <td>'.$res['nombre'].'</td>
                        <td>'.$res['calle'].'</td>
                        <td>'.$res['numero'].'</td>
                        <td>'.$res['colonia'].'</td>
                        <td>'.$res['telefono'].'</td>
                        
                        <td>
                            
                            <a href="restaurarContacto.php?id='.$res['id']. '"><img src="../img/rest.png"></a>

                            <a href="eliminarContacto.php?id='.$res['id']. '"><img src="../img/borrar.png"></a>
                            
                        </td>
                        </tr>
                        ';
                      }
                 ?>
                      
                </table>
        </div>

    <footer>
        <a href="../index.php"><h5>ir al inicio</h5></a>
    </footer>
</body>
</html>