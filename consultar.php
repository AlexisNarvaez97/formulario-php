<?php
require 'conexion.php';
$consultar = "SELECT * FROM personal";
$query  = mysqli_query($conectar, $consultar);
$array = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar datos</title>
    <style>
        .botonete {
            color: #800080;
            text-decoration: underline;
        }

        table {
            margin: 0 auto;
        }

        h1 {
            color: red;
            text-align: center;
        }

        .text-align-center {
            text-align: center;
        }
    </style>
</head>

<body>


        <h1>Modificar un registro de cliente</h1>

    <form action="eliminar.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>Mar</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Estado Civil</th>
                    <th>Fecha nacimiento</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($query as $row) { ?>
                    <tr>
                        <td><input name="checkbox[]" type="checkbox" value="<?php echo $row['Codigo']; ?>"></td>
                        <td><?php echo $row['Codigo']; ?> </td>
                        <td><?php echo $row['Nombre']; ?> </td>
                        <td><?php echo $row['Ap_paterno']; ?> </td>
                        <td><?php echo $row['Ap_materno']; ?> </td>
                        <td><?php echo $row['Edad']; ?> </td>
                        <td><?php echo $row['Edo_civil']; ?> </td>
                        <td><?php echo $row['Fecha_nac']; ?> </td>
                        <td><?php echo $row['Direccion']; ?> </td>
                        <td><?php echo $row['Ciudad']; ?> </td>
                        <td><a class="botonete" onclick="modificar(<?php echo $row['Codigo']?>)">Editar</a></td>
                    <tr></tr>
                </tbody>

            <?php
        }
        ?>
        </table>
        <br>
        <div class="text-align-center">
            <input type="submit" value="Eliminar">
        </div>
    </form>
<script>
    function modificar(cod) {
        window.location = "modificar.php?parametro="+cod;
    }
</script>
</body>

</html>