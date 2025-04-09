<?php
function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido \n";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido \n";
            return false;
        }
    }
    echo $nombre_usuario . " es válido \n";
    return true;
} 


// Array de prueba de nombres de usuario
$nombres = [
    "juan",     
    "jo",           
    "agustin raggi", 
    "agustin-raggi-donato-cataldi", 
    "Maria_2025",   
    "admin!",       
    "123",         
    "-user_",       
    "nombre@usuario",     
];

// Probar cada nombre
foreach ($nombres as $nombre) {
    comprobar_nombre_usuario($nombre);
}
?>