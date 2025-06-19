1) Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función.

2) Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios.

3) Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función 

4) Esta función debe pasar como parámetro 

5) La función mysqli_query () se utiliza para

6) y requiere como parámetros

7) La cláusula or die() se utiliza para

8) y la función mysqli_error () se puede usar para

9) Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo).


repuestas:

1) para poder iniciar la comunicacion con un servidor en mysql desde php, es necesario abrir una conexion al servidor. Para ello php ofrece la funcion mysqli_connect() que nos permite establecer la conexion especificando parametros como el host, nombre de usuario, contraseña y el nombre de la pase de datos 

2) todos los parametros son opcionales pero hay 3 de ellos que son necesarios para el funcionamiento que son el $hostname(servidor), $username(nombre de usuario de la base de datos), $password(contraseña de la base de datos)

3) una vez que se realizo la conexion se debe seleccionar una base de datos para su uso mediante la funcion mysqli_select_db()

4) si a esta funcion se le debe pasar como parametros $nombreCoxion (el recurso de conexion obtenido mediante mysqli_connect), $nombreBaseDatos (el nombre que le dimos a la base de datos)

5) la funcion mysqli_query() se utiliza para: la ejecucion una consulta en sql a la base de datos que le especifiquemos 

6) si requiere parametos que son $nombreConexion (es el recurso de conexion) y $query (es la consulta sql que se deseamos ejecutar y es una cadena de texto)

7) la clausula or die() la utilizamos para capturar en error, esto nos  facilita detectar porque no se pudo realizar la conexion con mysql

8) utilizamos mysqli_error() para devolver el último mensaje de error para la llamada más reciente a una función de mysqli que puede haberse ejecutado correctamente o haber fallado

9) -La estructura while usa mysqli_fetch_array($vResultado), que extrae cada fila de datos obtenida en la consulta como un array fila.      -Dentro del bucle, se imprimen cada uno de los valores de las columnas de esa fila en celdas de una tabla HTML. -mysqli_free_result($vResultado); libera la memoria usada por el resultado de la consulta.
-mysqli_close($link); cierra la conexión a la base de datos, liberando recursos del servidor.