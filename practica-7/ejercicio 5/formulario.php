<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario y Clave</title>
</head>
<body>
    <h1>Formulario de Usuario y Clave</h1>
    <form action="crear_sesiones.php" method="post">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave">
        <br>
        <input type="submit" value="Crear Sesiones">
    </form>
</body>
</html>