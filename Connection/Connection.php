<?php
// Datos de BD
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';

// Query para la Conexion 
$connection = mysqli_connect($hostname,$username,$password,$database);

// validador de conexion  de la bd

if (mysqli_connect_error()){
echo 'conexion Fallida';
}else {
  //  echo 'Conexion Exitosa';
}


?>