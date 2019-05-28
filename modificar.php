<?php
require 'conexion.php';
$cod=$_GET["parametro"];
$consultar = "SELECT * FROM personal WHERE Codigo =".$cod;
$query  = mysqli_query($conectar, $consultar);
$array = mysqli_fetch_array($query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title> <!-- Titulo de la pagina -->
    <link rel="stylesheet" href="stylos.css">
    <!--Enlazando unos estilos CSS para el documento.-->
    <style>
        body{
            background: rgb(242, 254, 138);
        }
        .cancelar {
            text-decoration: none;
            color: black;
        }
    </style>
</head>


<body>

    <!-- Titulo -->
    <h1>Pantalla de actualizacion de cliente</h1>
     <!-- Una linea para dividir el formulario y el titulo -->

    <hr>

    <form class="formulario" action="actualizar.php" method="POST">
        <!--Se dirige el form al momento de darle submit, al archivo registro.php mediante el metodo POST donde se mandan los valores de input para ser insertados. -->
        <?php
        foreach ($query as $row) {
            ?>
            <div>
                <label for="">Codigo del cliente:</label> <!-- Pinta el texto  Codigo del cliente: -->
                <input type="text" name="codigo" value="<?php echo $row['Codigo']; ?>" readonly> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Nombre del cliente:</label> <!-- Pinta el texto  Nombre del cliente: -->
                <input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Apellido Paterno del cliente:</label> <!-- Pinta el texto Apellido Paterno del cliente: -->
                <input type="text" name="apellido_paterno" value="<?php echo $row['Ap_paterno']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Apellido Materno del cliente:</label> <!-- Pinta el texto Apellido Materno del cliente: -->
                <input type="text" name="apellido_materno" value="<?php echo $row['Ap_materno']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Edad del cliente:</label> <!-- Pinta el texto Edad del cliente: -->
                <input type="text" name="edad" value="<?php echo $row['Edad']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Estado Civil del cliente:</label> <!-- Pinta el texto Estado Civil del cliente: -->
                <input type="text" name="estado_civil" value="<?php echo $row['Edo_civil']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Fecha Nacimiento del cliente:</label> <!-- Pinta el texto Fecha de nacimiento del cliente: -->
                <input type="text" name="fecha_nacimiento" value="<?php echo $row['Fecha_nac']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Direccion del cliente:</label> <!-- Pinta el texto Direccion del cliente: -->
                <input type="text" name="direccion" value="<?php echo $row['Direccion']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div>
                <label for="">Ciudad del cliente:</label> <!-- Pinta el texto Ciudad del cliente: -->
                <input type="text" name="ciudad" value="<?php echo $row['Ciudad']; ?>"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
            </div>
            <div class="separador">
                <input type="submit" value="Actualizar"> <!-- Aqui es donde se acciona el formulario y es mandado a registro.php -->
                <button type="button"> <a class="cancelar" href="consultar.php"> Regresar a modificaciones</button> <!-- Boton para cerrar la ventana actual -->
            </div>
            <hr>
        <?php
    }
    ?>
    <input type="hidden" name="funcion" value="modificar">
    <input type="hidden" name="cod" value="<?php echo $row['Codigo']; ?>">
    </form>