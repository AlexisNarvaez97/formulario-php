<?php
require 'conexion.php';
if(isset($_POST["checkbox"])) { 
    $delete = $_POST["checkbox"];
    $cantidad = count($delete);
    for($i="0"; $i<$cantidad; $i++) {  
         $del_id = $delete[$i];
         $consulta = "DELETE FROM personal WHERE Codigo ='$del_id'"; 
         $result = mysqli_query($conectar,$consulta) or die(mysqli_error($conectar));
         echo '<script> location.href= "consultar.php"; </script>';
    } 
}
?>
