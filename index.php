<?php //Guardamos variables para poder insertarla en la tabla.
    require 'conexion.php'; //Llamamos la conexion
    $consultar = "SELECT * FROM personal"; //Consulta para recorrer con fetch.
    $query  = mysqli_query($conectar, $consultar); //La conexión a la base de datos y ejecutar al consulta.
    $array = mysqli_fetch_array($query); //Retorna un array de strings de toda la tabla que fue seleccionada en este caso PERSONAL.
?>

<!DOCTYPE html> <!-- Estructura basica de un documento HTMO QUE TODOS SABEMOS. -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title> <!-- Titulo de la pagina -->
    <link rel="stylesheet" href="stylos.css"> <!--Enlazando unos estilos CSS para el documento.-->
</head>

<body>

    <!-- Titulo -->
    <h1>Agregar un nuevo Registro Cliente</h1> 
    <hr> <!-- Una linea para dividir el formulario y el titulo -->

    <!-- Formlario a utilizar para hacer el registro. -->
    <form class="formulario" action="registro.php" method="POST"> <!--Se dirige el form al momento de darle submit, al archivo registro.php mediante el metodo POST donde se mandan los valores de input para ser insertados. -->
        <div>
            <label for="">Codigo del cliente:</label> <!-- Pinta el texto  Codigo del cliente: -->
            <input type="text" name="codigo"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Nombre del cliente:</label> <!-- Pinta el texto  Nombre del cliente: -->
            <input type="text" name="nombre"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Apellido Paterno del cliente:</label> <!-- Pinta el texto Apellido Paterno del cliente: -->
            <input type="text" name="apellido_paterno"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Apellido Materno del cliente:</label> <!-- Pinta el texto Apellido Materno del cliente: -->
            <input type="text" name="apellido_materno"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Edad del cliente:</label> <!-- Pinta el texto Edad del cliente: -->
            <input type="text" name="edad"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Estado Civil del cliente:</label> <!-- Pinta el texto Estado Civil del cliente: -->
            <input type="text" name="estado_civil"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Fecha Nacimiento del cliente:</label> <!-- Pinta el texto Fecha de nacimiento del cliente: -->
            <input type="text" name="fecha_nacimiento"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Direccion del cliente:</label> <!-- Pinta el texto Direccion del cliente: -->
            <input type="text" name="direccion"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
        <div>
            <label for="">Ciudad del cliente:</label> <!-- Pinta el texto Ciudad del cliente: -->
            <input type="text" name="ciudad"> <!-- Caja de texto donde se extraen los datos, con un atributo name donde se utilizara al momento de pasar el valor del input a registro.php -->
        </div>
            <div class="separador">
                <input type="submit" value="Guardar"> <!-- Aqui es donde se acciona el formulario y es mandado a registro.php -->
                <button type="button" onclick="cerrar()">Cerrar Ventana</button> <!-- Boton para cerrar la ventana actual -->
            </div>
        </form>


        <!-- Tabla para ir mostrando los datos del formulario -->  
    
            <table id="tabla" border="1">
                <thead> <!-- Encabezado de la tabla -->
                    <tr> <!-- Fila del encabezado-->
                        <th>Codigo</th> <!--Celdas -->
                        <th>Nombre</th> <!--Celdas -->
                        <th>Apellido Paterno</th> <!--Celdas -->
                        <th>Apellido Materno</th> <!--Celdas -->
                        <th>Edad</th> <!--Celdas -->
                        <th>Estado Civil</th> <!--Celdas -->
                        <th>Fecha nacimiento</th> <!--Celdas -->
                        <th>Direccion</th> <!--Celdas -->
                        <th>Ciudad</th> <!--Celdas -->
                    </tr> <!-- Cierra la fila del encabezado-->
                </thead>
                <tbody> <!-- Contenido de la tabla -->
                    <?php //Se abre una sentencia para ejecutar codigo php, en este caso un foreach que es un for para iterar arrays, en este caso el query que teniamos desde el principio de la consulta de la tabla personal para traer todos los datos de la tabla en filas con $row, se abre una fila para acomodar las filas que vengan de localhost.
                    foreach ($query as $row) { ?> 
                        <tr>
                            <td><?php echo $row['Codigo']; ?> </td> <!-- Se imprime los valores de la columna de Codigo de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Nombre']; ?> </td> <!-- Se imprime los valores de la columna de Nombre de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Ap_paterno']; ?> </td> <!-- Se imprime los valores de la columna de Apellido paterno de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Ap_materno']; ?> </td> <!-- Se imprime los valores de la columna de Apellido materno de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Edad']; ?> </td> <!-- Se imprime los valores de la columna de Edad de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Edo_civil']; ?> </td> <!-- Se imprime los valores de la columna de Estado Civil de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Fecha_nac']; ?> </td> <!-- Se imprime los valores de la columna de Fecha_nacimiento de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Direccion']; ?> </td> <!-- Se imprime los valores de la columna de Direccion de la base de datos localhost "controldatos" en una celda con echo-->
                            <td><?php echo $row['Ciudad']; ?> </td> <!-- Se imprime los valores de la columna de Ciudad de la base de datos localhost "controldatos" en una celda con echo-->
                        <tr>
                    </tbody> <!-- Cierra contenido de la tabla -->
                <?php 
            }
            ?>  <!-- Cierra la iteraccion de foreach. -->
        </table>
        <!-- Cierra tabla -->

<script> //Funcion de JS para cerrar la ventana actual.
    function cerrar() {
        window.close();
        window.open("","","");
    }
</script>
</body>
</html>
