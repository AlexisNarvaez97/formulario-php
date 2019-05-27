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

$insertar = "INSERT INTO personal VALUES ('$codigo','$nombre','$apellidop','$apellidom','$edad','$estado','$nacimiento', '$direccion','$ciudad')"; //Se guarda en una variable, la insercción a la base de datos en la tabla personal pasando como parametros las variables donde se almacenaron los valores de los inputs del metodo POST.

$query = mysqli_query($conectar, $insertar); //Realizada una consulta a la base de datos.

if($query){ //En cas de ser true, actualizara la tabla inmediatamente.
    echo '<script> location.href= "index.php"; </script>';
} else { //En caso de un error, marcara un alerta de error.
    echo '<script> alert("ERROR GRAVE"); location.href= "index.php"; </script>';
}
?>