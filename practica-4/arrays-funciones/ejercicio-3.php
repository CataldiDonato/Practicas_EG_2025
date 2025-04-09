<!-- A -->
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
// esto es lo que nos devuelve Has entrado en esta pagina a las 21 horas, con 49 minutos y 32
// segundos, del 9/4/2025.
// no devuelve la misma hora por la configuracion de la zona horaeia que esta configurado php si quisieramos que devuelva nuestra zona horaria tendriamos que hacer
// date_default_timezone_set("America/Argentina/Buenos_Aires"); esto iria arriba de $fun
?>

<!-- B -->
<?php
function sumar($sumando1,$sumando2){
    $suma=$sumando1+$sumando2;
    echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
// la salida que tiene es 5 + 6 = 11
?>