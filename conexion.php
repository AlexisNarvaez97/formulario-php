<?php
$host = "localhost"; //Se almacena en una variable el servidor, en este caso es localhost.
$user = "root"; //Usuario por defecto del localhost.
$clave = ""; //Contraseña, por defecto siempre se deja vacia.
$bd = "controldatos"; //Nombre de la base de datos en el localhost.
$conectar = mysqli_connect($host,$user,$clave,$bd); //Abre una conexión al servidor de MySQL, donde mysql_connect almacena los parametros para ejecutar la conexión.
?>