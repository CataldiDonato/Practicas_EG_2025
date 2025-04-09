# Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto

```
p#normal {
font-family: arial,helvetica;
font-size: 11px;
font-weight: bold;
}

*#destacado {
border-style: solid;
border-color: blue;
border-width: 2px;
}

#distinto {
background-color: #9EC7EB;
color: red;
}

<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>

- Segun el codigo podemos ver en el selector que los párrafos con id 'normal' van a tener una fuente arial y de no ser posible helvetica, un tamaño de fuente de 11 pixeles en negritas.
- El selector indica que todos los elementos con un id 'destacado' tendran bordes rellenos de color azul y un ancho de 2 pixeles. 
- El elemento con id 'distinto' tendrá un fondo de color #9EC7EB con un contenido de color rojo.
Notar que todos los estilos se aplican sobre elementos con ID.
```