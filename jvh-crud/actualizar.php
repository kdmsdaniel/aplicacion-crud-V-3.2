<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clientes WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina web</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container mt-5 ">
                <div class="col-md-3">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de completo:" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="rif" placeholder="RIF:" value="<?php echo $row['rif']  ?>">
                                <input type="number" class="form-control mb-3" name="tlf1" placeholder="Telefono 1:" value="<?php echo $row['tlf1']  ?>">
                                <input type="number" class="form-control mb-3" name="tlf2" placeholder="Telefono 2:" value="<?php echo $row['tlf2']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección:" value="<?php echo $row['direccion']  ?>">
                                <input type="email" class="form-control mb-3" name="correo" placeholder="Correo Eletrónico:" value="<?php echo $row['correo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
        </div>
    </body>
</html>