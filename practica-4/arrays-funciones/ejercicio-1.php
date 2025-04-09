<?php
$a = array( 'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);
// en este codigo lo que hacemos es inicializar un array en $a con las claves 'color', 'sabor', 'forma' y 'nombre'
// luego le agregamos un valor 4
?> 

<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
// en este codigo creamos un array como el anteriro pero la diferencia es que la hacemos paso a paso y tambien le agregamos el valor 4
?> 
<!-- conclusion ambos codigos tienen una estructura diferente pero llegan al mismo resultado en cualquiera de los dos  -->