<?php
include('db.php');
$query = "SELECT * FROM capitales";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head><title>Listado de Ciudades</title></head>
<body>
    <h2>Listado de Ciudades</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['ciudad']; ?></td>
                <td><?php echo $fila['pais']; ?></td>
                <td><?php echo $fila['habitantes']; ?></td>
                <td><?php echo $fila['superficie']; ?></td>
                <td><?php echo $fila['tiene_metro'] == 1 ? 'Sí' : 'No'; ?></td>
            </tr>
        <?php } ?>
    </table>
    <div>
        <a href="../index.php">Volver al menú</a>
    </div>
</body>
</html>

<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
