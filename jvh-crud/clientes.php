<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clientes";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
            <div class="container mt-5 estudiante">
                    <div class="row"> 
                        
                        <div class="col-md-2 estudiante">
                            <h1>Ingrese Datos:</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="cod_estudiante" placeholder="Id:">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Completo:">
                                    <input type="text" class="form-control mb-3" name="rif" placeholder="Rif">
                                    <input type="tel" class="form-control mb-3" name="tlf1" placeholder="Telefono 1:">
                                    <input type="number" class="form-control mb-3" name="tlf2" placeholder="Telefono 2:">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion:">
                                    <input type="email" class="form-control mb-3" name="correo" placeholder="Correo Electrónico:">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-10 estudiante">
                            <table class="table" >
                                <thead class="table table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre Completo:</th>
                                        <th>Rif</th>
                                        <th>Telefono 1:</th>
                                        <th>Telefono 2:</th>
                                        <th>Direccion:</th>
                                        <th>Correo Electrónico:</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['rif']?></th>
                                                <th><?php  echo $row['tlf1']?></th>    
                                                <th><?php  echo $row['tlf2']?></th>   
                                                <th><?php  echo $row['direccion']?></th>  
                                                <th><?php  echo $row['correo']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="editar boton">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="eliminar boton">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>