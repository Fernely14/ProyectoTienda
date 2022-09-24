<?php

include('../connection/connection.php');



    $phpId = $_POST['inputId'];
    $phpNombre = $_POST['inputNombre'];

    $updateFabricante = "UPDATE fabricante SET  nombre ='$phpNombre' where codigo ='$phpId´";

    $resultado = mysqli_query($connection,$updateFabricante);


header ('location:../Fabricantes.php')

?>