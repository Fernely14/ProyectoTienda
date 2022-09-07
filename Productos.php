<!doctype html>
   <html lang="en">
  
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Productos</title>
  
    </head>
    <body>
    <br>
    <div class= "container">
  
       <!--inicio de formulario-->
       <form action="action/insertproducto.php" method="POST">
    <div class="mb-3">
    <label class="form-label">Nombre Producto </label>
    <input type="text" name="inputNombre" class="form-control">
    <br>
    <label class="form-label">Precio </label>
    <input type="number" name="inputPrecio" class="form-control">
    <br>
    <label class="form-label">Codigo fabricante </label>

        <!--select para los nombres de fabricantes-->
        <select name="inputcodigo_fabricante" class="form-select form-select-md" aria-label=".form-select-lg example">
            <option selected>Abre este menu</option>
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
            <option value="<?php echo $fila["codigo"]?>"><?php echo $fila["nombre"] ?></option>
            <?php } //cierre del while?>
    </select>
    </div>

    <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
</form>







  
  
  
  <br>
  <table class= "table table-dark table-striped ">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">precio</th>
      <th scope="col">codigo_fabricante</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
      </tr>
</thead>
  <tbody>

  
        <?php 
          include('connection/connection.php');
          $consulta = "SELECT * FROM producto";
          $resultado = mysqli_query($connection,$consulta);
          while ($fila = mysqli_fetch_array($resultado)){
        ?>

    <tr>
      <th scope="row"><?php echo $fila ["codigo"] ?></th>
      <th scope="row"><?php echo $fila ["nombre"] ?></th>
      <th scope="row"><?php echo $fila ["precio"] ?></th>
      <th scope="row"><?php echo $fila ["codigo_fabricante"] ?></th>
      <td><a href="action/Deleteproducto.php?id=<?php echo $fila["codigo"] ?>"class="btn btn-danger">Eliminar</a></td>
      <td><a class="btn btn-warning">Editar</a></td>
      
    </tr> 
      
      <?php } ?>

      </tbody>
    </table>
   