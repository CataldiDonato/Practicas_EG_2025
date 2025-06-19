<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root";


// Conexión a la base de datos
$conexion = new mysqli($servername, $username);
mysqli_select_db($conexion, "Super");

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Verificar si se ha enviado el formulario de agregar al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
    $producto_id = $_POST["producto_id"];
    $consulta_producto = "SELECT id, producto, precio FROM catálogo WHERE id = $producto_id";
    $resultado_producto = $conexion->query($consulta_producto);

    if ($resultado_producto->num_rows > 0) {
        $fila = $resultado_producto->fetch_assoc();
        $producto = $fila["producto"];
        $precio = $fila["precio"];
        agregarAlCarrito($producto_id, $producto, $precio);
    }
}

// Función para agregar un producto al carrito
function agregarAlCarrito($id, $producto, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    $_SESSION['carrito'][] = array(
        'id' => $id,
        'producto' => $producto,
        'precio' => $precio
    );
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito($id) {
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['id'] == $id) {
                unset($_SESSION['carrito'][$key]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Productos Disponibles</h1>
    <ul>
        <?php
        $consulta = "SELECT id, producto, precio FROM catálogo";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<li>" . $fila['producto'] . " - $" . $fila['precio'] . "
                    <form method='post'>
                        <input type='hidden' name='producto_id' value='" . $fila['id'] . "'>
                        <input type='submit' name='agregar' value='Agregar al Carrito'>
                    </form>
                </li>";
            }
        }
        ?>
    </ul>

    <h1>Carrito de Compras</h1>
    <?php
    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $producto) {
            echo "<li>" . $producto['producto'] . " - $" . $producto['precio'] . "
                <form method='post'>
                    <input type='hidden' name='producto_id' value='" . $producto['id'] . "'>
                    <input type='submit' name='eliminar' value='Eliminar del Carrito'>
                </form>
            </li>";
        }
        echo "</ul>";
    } else {
        echo "El carrito está vacío.";
    }
    ?>
</body>
</html>