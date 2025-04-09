# Ejercicio 2.

## a)

```html
<!-- Código controlado el día 12/08/2009 →
```

### Ubicación en el documento:
```
Puede estar en cualquier parte del documento HTML.  
```

### Efecto:  
```
Es un comentario en HTML. No se muestra en el navegador ni afecta la estructura de la página.  
```

### Elementos, etiquetas y atributos:
```  
- <!-- --> → Etiqueta de comentario. No es obligatoria, pero útil para documentación interna del código.  
- El comentario está mal cerrado. Debería ser `<!-- Código controlado el día 12/08/2009 -->`.  
```

## b)  

```html
<div id="bloque1">Contenido del bloque1</div>
```
### Ubicación en el documento:  
```
Dentro de <body>, ya que representa contenido visual.  
```

### Efecto:
``` 
Crea un bloque de contenido con el texto "Contenido del bloque1".  
```

### Elementos, etiquetas y atributos:  
```
- <div> → Etiqueta de contenedor en bloque.  
- id="bloque1" → Atributo id (opcional, pero recomendado si se necesita identificar este bloque con CSS o JavaScript).  
```


## c)  
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />
```
### Ubicación en el documento:  
```
Dentro de `<body>`, ya que muestra una imagen.  
```

### Efecto:  
```
Inserta una imagen con dimensiones de 32x32 píxeles. No se muestra nada porque `src=""` está vacío.  
```

### Elementos, etiquetas y atributos:  
```
- <img> → Etiqueta para imágenes. Obligatoria.  
- src="" → Ruta de la imagen (obligatorio, aunque vacío no muestra nada).  
- alt="lugar imagen" → Texto alternativo (opcional, pero recomendado para accesibilidad).  
- id="im1" → Identificador único (opcional).  
- name="im1" → Nombre de la imagen (opcional, antes usado en formularios).  
- width="32" y height="32" → Tamaño en píxeles (opcional).  
- longdesc="detalles.htm" → Enlace a una descripción detallada de la imagen (opcional).  
```


## d)  
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```
### Ubicación en el documento:  
```
Dentro de `<head>`, ya que define metadatos.  
```

### Efecto:  
```
- La primera `<meta>` establece palabras clave para motores de búsqueda.  
- La segunda `<meta>` define la fecha de expiración del contenido en caché.  
```

### Elementos, etiquetas y atributos:  
```
- <meta> → Etiqueta de metadatos (obligatoria para algunas configuraciones).  
- name="keywords" → Define palabras clave (opcional).  
- lang="es" → Idioma de las palabras clave (opcional).  
- content="casa, compra, venta, alquiler " → Contenido de las palabras clave (opcional).  
- http-equiv="expires" → Controla el almacenamiento en caché (opcional).  
- content="16-Sep-2019 7:49 PM" → Fecha de expiración del caché (opcional).  
```


## e)  
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8"
rel="help">Resumen HTML</a>
```
### Ubicación en el documento:  
```
Dentro de <body>, ya que es un enlace visible.  
```

### Efecto:  
```
Crea un enlace a `resumen.html`, indicando que es un documento HTML en español.  
```

### Elementos, etiquetas y atributos:  
```
- <a> → Etiqueta de enlace (obligatoria).  
- href="http://www.e-style.com.ar/resumen.html" → URL del destino (obligatorio).  
- type="text/html" → Tipo de contenido del destino (opcional).  
- hreflang="es" → Idioma del destino (opcional).  
- charset="utf-8" → Codificación del documento enlazado (opcional).  
- rel="help" → Relación del enlace con el documento (opcional).  
```


## f)  
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
<caption align="top"> Título </caption>
<tr>
<th scope="col">&nbsp;</th>
<th scope="col">A</th>
<th scope="col">B</th>
<th scope="col">C</th>
</tr>
<tr>
<th scope="row">1º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th scope="row">2º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
```
### Ubicación en el documento:  
```
Dentro de <body>, ya que es contenido visual.  
```
### Efecto:  
```
Crea una tabla con 3 columnas y 2 filas de datos vacíos.  
```

### Elementos, etiquetas y atributos:  
```
- <table> → Etiqueta para tablas (obligatoria).  
  - width="200" → Ancho en píxeles (obsoleto en HTML5).  
  - summary="Datos correspondientes al ejercicio vencido" → Resumen para accesibilidad (obsoleto en HTML5).  
- <caption> → Título de la tabla (opcional).  
  - align="top" → Alineación (obsoleto en HTML5).  
- <tr> → Fila de la tabla (obligatoria dentro de `<table>`).  
- <th> → Celda de encabezado (opcional).  
  - scope="col" → Indica que es un encabezado de columna.  
  - scope="row" → Indica que es un encabezado de fila.  
- <td> → Celda de datos (obligatoria para el contenido).  
- &nbsp; → Espacio en blanco para que las celdas no queden vacías.  
```