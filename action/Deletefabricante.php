<?php

include('../connection/connection.php');

$phpCodigo = $_GET['id'];

$DelateFabricante="DELETE FROM fabricante WHERE codigo = '$phpCodigo'";

$resultado = mysqli_query($connection,$DelateFabricante);

header('Location:../Fabricantes.php')

?>