<html>
<head><title>Documento 1</title></head>
<body>
<?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
            for ($c = 1; $c <= $col;$c++) {
                echo "<td>&nbsp;</td>\n";
            } echo "</tr>\n";
    }
    echo "</table>\n";
// se utiliza para crear una tabla de 5 filas y 2 columnas
//  con una altura del 90% de la pantalla y un borde de 1 pixel
//  y cada celda tiene un espacio en blanco
?>
</body></html>


<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
    echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
// se utiliza para crear un formulario que pide la edad
//  y al enviar el formulario se muestra si es mayor a 21 años la persona es mayor de edad 
//  o menor de edad si es menor a 21 años
// ademas fija si el formulario se ha enviado o no, si no se ha enviado se muestra el formulario
?>
</body></html> 