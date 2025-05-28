<?php
include('db.php');
$query = "SELECT * FROM capitales";
$resultado = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Baja de Ciudad</title>
</head>
<body>
    <h2>Baja de Ciudad</h2>
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
        <label>ID de la Ciudad a eliminar: 
            <input type="number" name="id" required>
        </label><br>
        <input type="submit" value="Eliminar Ciudad">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $checkQuery = "SELECT * FROM capitales WHERE id = $id";
        $checkResult = mysqli_query($conexion, $checkQuery);
        if (mysqli_num_rows($checkResult) > 0) {
            $deleteQuery = "DELETE FROM capitales WHERE id = $id";
            if (mysqli_query($conexion, $deleteQuery)) {
                echo "<p style='color: green;'>Ciudad con ID $id eliminada correctamente.</p>";
            } else {
                echo "<p style='color: red;'>Error al eliminar: " . mysqli_error($conexion) . "</p>";
            }
        } else {
            echo "<p style='color: orange;'>No se encontró una ciudad con ID $id.</p>";
        }
        echo "<meta http-equiv='refresh' content='2'>";
    }
    ?>
    <div>
        <a href="../index.php">Volver al menú</a>
    </div>
    <?php
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
</body>
</html>
