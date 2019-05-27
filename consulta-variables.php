<?php
require 'conexion.php';

$consultar = "SELECT * FROM personal";
$query  = mysqli_query($conectar,$consultar);
$array = mysqli_fetch_array($query);

?>