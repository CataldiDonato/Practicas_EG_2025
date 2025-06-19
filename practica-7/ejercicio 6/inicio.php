<?php
session_start();

if (isset($_SESSION['nombre'])) {

    $nombre = $_SESSION['nombre'];
    echo "<h1>Bienvenido, $nombre</h1>";
} else {
    //Con un nombre no definido
    echo "<h1>No estas autorizado a visitar esta pagina.</h1>";
}
?