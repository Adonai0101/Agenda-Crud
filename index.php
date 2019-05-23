<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="css/index.css">
    <title>Domicilios</title>
</head>
<body>
    <header>
        <h1>Domicilios</h1>
    </header>
    <div class="conten">
    
        <div class="formulario">
            <form action="php/registro.php" method="POST">
                <div class="cont-input">
                        <input name = "nombre" type="text" placeholder="Nombre" autofocus>
                        <input name = "calle" type="text" placeholder="Calle">
                        <input name = "numero" type="text" placeholder="Numero">
                        <input name = "colonia" type="text" placeholder="Colonia">
                        <input name = "telefono" type="text" placeholder="Telefono">
                        <textarea name="nota" id="" cols="30" rows="10" placeholder="Agrega una nota"></textarea>
                        <input type="submit" class="boton" value = "Registrar">
                </div>
                
            </form>
        </div>
        
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
                    include "php/conexion.php";
                    $sql = "SELECT * FROM agenda where bandera = 'ok'";
                    $resultados = $conexion -> query($sql);

                    while($res = $resultados -> fetch_array(MYSQLI_BOTH) ){
                        echo'
                        <tr>
                        <td>'.$res['nombre'].'</td>
                        <td>'.$res['calle'].'</td>
                        <td>'.$res['numero'].'</td>
                        <td>'.$res['colonia'].'</td>
                        <td>'.$res['telefono'].'</td>
                        
                        <td>
                            
                            <a href="php/ver.php?id='.$res['id']. '"> <img src="img/ver.png"> </a>
                            <a href="php/editar.php?id='.$res['id']. '"><img src="img/editar.png"></a>
                            <a href="php/eliminar.php?id='.$res['id']. '"><img src="img/borrar.png"></a>
                            
                        </td>
                        </tr>
                        ';
                      }
                 ?>
                   
                </table>
        </div>
        <footer>
            <a href="php/historial.php"><h5>ir a historial</h5></a>
        </footer>
    </div>

    
  
</body>
</html>