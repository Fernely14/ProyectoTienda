<!doctype html>
    <html lang="en">
  
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fabricantes</title>
  
    </head>
    <body>
    
  <div class= "container">
  
  <br>
  <form action="action/insertfabricante.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Nombre Fabricante</label>
    <input type="text" name= "inputNombre" class="form-control">
  
  </div>
  <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
  <td><a href="Index.html "class="btn btn-primary">Home</a></td>
   <br>
</form>
   


   <br>
  <table class= "table table-dark table-striped ">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
      </tr>
</thead>
  <tbody>

  
  <?php
                // importar el archivo de conexion
                include('connection/connection.php');
                // variable para listar toda la tabla
                $consulta = "SELECT * FROM fabricante";
                // query de conexion  y query de listado
                $resultado = mysqli_query($connection,$consulta);
                // mientras haya algo dentro de table, seguira listado
                while ($fila= mysqli_fetch_array($resultado)){
                ?>

                        <tr>
                            <th scope="row"><?php echo $fila["codigo"] ?></th>
                            <td><?php echo $fila["nombre"] ?></td>
                            <td><a href="action/Deletefabricante.php?id=<?php echo $fila["codigo"] ?>"class="btn btn-danger">Eliminar</a></td>
                            <td><a href="action/editarfabricante.php?id=<?php echo $fila["codigo"] ?>"class="btn btn-warning">Editar</a></td>
                        </tr>
                    <?php }//cierre del while?>
                </tbody>
            </table>
            <!--final de la tabla de fabricantes-->
    </div>
