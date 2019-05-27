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
</head>

<body>




    <form action="" method="">
        <table border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Estado Civil</th>
                    <th>Fecha nacimiento</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($query as $row) { ?>
                    <tr>
                        <td><?php echo $row['Codigo']; ?> </td>
                        <td><?php echo $row['Nombre']; ?> </td>
                        <td><?php echo $row['Ap_paterno']; ?> </td>
                        <td><?php echo $row['Ap_materno']; ?> </td>
                        <td><?php echo $row['Edad']; ?> </td>
                        <td><?php echo $row['Edo_civil']; ?> </td>
                        <td><?php echo $row['Fecha_nac']; ?> </td>
                        <td><?php echo $row['Direccion']; ?> </td>
                        <td><?php echo $row['Ciudad']; ?> </td>
                    <tr>


                </tbody>

            <?php
        }
        ?>
        </table>
    </form>
</body>

</html>