<?php

require 'conexion.php'; //Se llama a la conexión a localhost.

$codigo = $_POST['codigo']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "codigo" del input.
$nombre = $_POST['nombre']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "nombre" del input.
$apellidop = $_POST['apellido_paterno']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "apellido_paterno" del input.
$apellidom = $_POST['apellido_materno']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "apellido_materno" del input.
$edad = $_POST['edad']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "edad" del input.
$estado = $_POST['estado_civil']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "estado_civil" del input. 
$nacimiento = $_POST['fecha_nacimiento']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "fecha_nacimiento" del input.
$direccion = $_POST['direccion']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "direccion" del input.
$ciudad = $_POST['ciudad']; //Se guarda en una variable el valor que se mande desde el form de index.php con metodo post, del atributo name = "ciudad" del input.

$funcion=$_POST["funcion"];
$cod=$_POST["cod"];

if($funcion=="modificar") {
    $actualizar = "update personal set Codigo = '$codigo', Nombre = '$nombre', Ap_paterno = '$apellidop', Ap_materno = '$apellidom', Edad ='$edad', Edo_civil = '$estado', Fecha_nac = '$nacimiento', Direccion = '$direccion', Ciudad = '$ciudad' where Codigo = $cod";

    $query = mysqli_query($conectar, $actualizar);
    header("location: consultar.php");

}

