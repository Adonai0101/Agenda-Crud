<?php 
    include("conexion.php");
/*Obtenemos datos y los mostramos despues */
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query =  "SELECT * FROM AGENDA where id = $id";
        $resultado = mysqli_query($conexion,$query);

        if(mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $id = $row['id'];
            $nombre = $row['nombre'];
            $calle = $row['calle'];
            $numero = $row['numero'];
            $colonia = $row['colonia'];
            $telefono = $row['telefono'];
            $nota = $row['nota'];

        }
    }

    /* Recibimos los datos  */
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $calle  = $_POST['calle'];
        $numero = $_POST['numero'];
        $colonia = $_POST['colonia'];
        $telefono = $_POST['telefono'];
        $nota = $_POST['nota'];

        $sql = "UPDATE agenda SET nombre = '$nombre',calle = '$calle',numero = '$numero',colonia = '$colonia',telefono = '$telefono',nota = '$nota' where id = '$id'";
        mysqli_query($conexion,$sql);
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <title>Editar Agenda</title>
</head>
<body>
    <header>
        <h1>Editar Domicilio</h1>
    </header>
    <div class="formulario">
            <form action="editar.php?id=<?php echo $_GET['id']?>" method="POST">
                <div class="cont-input">
                        <input value = "<?php echo $nombre?>" name = "nombre" type="text" placeholder="Nombre" autofocus>
                        <input value = "<?php echo $calle?>" name = "calle" type="text" placeholder="Calle">
                        <input value = "<?php echo $numero?>" name = "numero" type="text" placeholder="Numero">
                        <input value = "<?php echo $colonia?>" name = "colonia" type="text" placeholder="Colonia">
                        <input value = "<?php echo $telefono?>" name = "telefono" type="text" placeholder="Telefono">
                        <textarea  name="nota" id="" cols="30" rows="10" placeholder="Agrega una nota">
                            <?php echo $nota?>
                        </textarea>
                        <button name = "update" class = "boton">Modificar</button>
                        <a href="../" class = "centro">Cancelar</a>
                </div>
                
            </form>    
    </div>
</body>
</html>