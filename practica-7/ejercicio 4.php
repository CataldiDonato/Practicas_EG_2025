<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["titular"])) {
    
    $titular = $_POST["titular"];
    setcookie("titular", $titular, time() + 3600 * 24 * 30); 
} elseif (isset($_GET["borrar"]) && $_GET["borrar"] === "1") {
   
    setcookie("titular", "", time() - 3600); 
}

// Obtener el valor de la cookie si existe
$titular = isset($_COOKIE["titular"]) ? $_COOKIE["titular"] : "";

// Contenido HTML
?>
<!DOCTYPE html>
<html>
<head>
    <title>Periódico</title>
</head>
<body>
    <h1>Periódico</h1>
    <form action="" method="post">
        <p>Selecciona el tipo de titular que deseas ver:</p>
        <input type="radio" name="titular" value="Politica" <?php echo ($titular === "Politica") ? "checked" : ""; ?>> Noticia Política
        <input type="radio" name="titular" value="Economica" <?php echo ($titular === "Economica") ? "checked" : ""; ?>> Noticia Económica
        <input type="radio" name="titular" value="Deportiva" <?php echo ($titular === "Deportiva") ? "checked" : ""; ?>> Noticia Deportiva
        <input type="submit" value="Configurar Titular">
    </form>
    <a href="?borrar=1">Borrar Configuración</a>
</body>
</html>