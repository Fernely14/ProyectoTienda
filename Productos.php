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
    
  <div class= "container">
  <table class= "table table-dark table-striped ">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">precio</th>
      <th scope="col">codigo_fabricante</th>
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
      
    </tr> 
      
      <?php } ?>

      </tbody>
    </table>
   