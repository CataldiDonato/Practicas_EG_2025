<?php
include('db.php');

$query = "SELECT * FROM capitales";
$resultado = mysqli_query($conexion, $query);

if (isset($_POST['buscar'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM capitales WHERE id = $id";
    $resultadoBusqueda = mysqli_query($conexion, $query);
    $ciudad = mysqli_fetch_assoc($resultadoBusqueda);
}
if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $ciudadNombre = mysqli_real_escape_string($conexion, $_POST['ciudad']);
    $pais = mysqli_real_escape_string($conexion, $_POST['pais']);
    $habitantes = (int)$_POST['habitantes'];
    $superficie = (float)$_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;
    $query = "UPDATE capitales SET ciudad='$ciudadNombre', pais='$pais', habitantes=$habitantes, superficie=$superficie, tiene_metro=$tieneMetro WHERE id = $id";

    if (mysqli_query($conexion, $query)) {
        echo "<p style='color: green;'>Ciudad actualizada exitosamente.</p>";
    } else {
        echo "<p style='color: red;'>Error al actualizar la ciudad: " . mysqli_error($conexion) . "</p>";
    }
    $query = "SELECT * FROM capitales WHERE id = $id";
    $resultadoBusqueda = mysqli_query($conexion, $query);
    $ciudad = mysqli_fetch_assoc($resultadoBusqueda);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificación de Ciudad</title>
</head>
<body>
    <h2>Modificación de Ciudad</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>País</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['ciudad']; ?></td>
                <td><?php echo $fila['pais']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <form method="post">
        <label>ID de la Ciudad: <input type="number" name="id" required></label>
        <input type="submit" name="buscar" value="Buscar Ciudad">
    </form>

    <?php if (isset($ciudad)) { ?>
        <h3>Editar Ciudad</h3>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $ciudad['id']; ?>">
            <label>Ciudad: <input type="text" name="ciudad" value="<?php echo $ciudad['ciudad']; ?>" required></label><br>
            <label>País: <input type="text" name="pais" value="<?php echo $ciudad['pais']; ?>" required></label><br>
            <label>Habitantes: <input type="number" name="habitantes" value="<?php echo $ciudad['habitantes']; ?>" required></label><br>
            <label>Superficie: <input type="number" step="0.01" name="superficie" value="<?php echo $ciudad['superficie']; ?>" required></label><br>
            <label>Tiene Metro: <input type="checkbox" name="tieneMetro" <?php if (isset($ciudad['tiene_metro']) && $ciudad['tiene_metro'] == 1) echo 'checked'; ?>></label><br>
            <input type="submit" name="modificar" value="Modificar Ciudad">
        </form>
    <?php } ?>
    <div>
        <a href="../index.php">Volver al menú</a>
    </div>
</body>
</html>
