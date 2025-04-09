# Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```
p.quitar {
color: red;
}

*.desarrollo {
font-size: 8px;
}

.importante {
font-size: 20px;
}

<p class="desarrollo">
En este primer párrafo trataremos lo siguiente:
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
Este párrafo debe ser quitado de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p >
En este otro párrafo trataremos otro tema:<br />
xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
Y este es el párrafo más importante de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</ p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>

A diferencia del ejercicio 2 que trabajaba con IDs, en este ejercicio podemos notar que los estilos se aplican sobre clases.
- Los parrafos pertenecientes a la clase '.quitar' tendran un color rojo.
- Todos los elementos pertenecientes a la clase '.desarrollo' tendran un tamaño de fuente de 8 pixeles.
- Los elementos de la clase '.importante' tendran un tamaño de fuente de 20 pixeles.

Notar que el ultimo parrafo del HTML contiene dos clases 'quitar' e 'importante' por lo que se le aplicaran ambos estilos.

```