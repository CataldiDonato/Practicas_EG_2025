### **2.a) Comentario en HTML**  
```html
<!-- Código controlado el día 12/08/2009 →  
```
✅ **Ubicación:** Puede ir en **cualquier parte** del documento.  
✅ **Efecto:** No tiene impacto visual, es solo un comentario interno.  
✅ **Elementos:**  
   - `<!-- ... -->` → **Comentario en HTML** (No se muestra en la página).  

---

### **2.b) Bloque `<div>`**  
```html
<div id="bloque1">Contenido del bloque1</div>
```
✅ **Ubicación:** **`<body>`** (Se usa para estructurar el contenido).  
✅ **Efecto:** Crea un **bloque contenedor** con el contenido "Contenido del bloque1".  
✅ **Elementos y atributos:**  
   - `<div>` → **Elemento de bloque** que agrupa contenido.  
   - `id="bloque1"` → **Atributo obligatorio:** Define un identificador único.  

---

### **2.c) Imagen `<img>`**  
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32"
longdesc="detalles.htm" />
```
✅ **Ubicación:** **`<body>`** (Muestra una imagen en la página).  
✅ **Efecto:** Muestra una imagen con dimensiones específicas.  
✅ **Elementos y atributos:**  
   - `<img>` → **Elemento vacío** (No tiene etiqueta de cierre).  
   - `src=""` → **Atributo obligatorio:** Especifica la ruta de la imagen (vacío en este caso).  
   - `alt="lugar imagen"` → **Obligatorio:** Texto alternativo si la imagen no carga.  
   - `id="im1"` → **Opcional:** Identificador único.  
   - `name="im1"` → **Opcional:** Nombre del elemento.  
   - `width="32"` → **Opcional:** Ancho de la imagen.  
   - `height="32"` → **Opcional:** Alto de la imagen.  
   - `longdesc="detalles.htm"` → **Opcional:** URL con una descripción detallada de la imagen.  

---

### **2.d) Metadatos `<meta>`**  
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```
✅ **Ubicación:** **`<head>`** (Define metadatos para la página).  
✅ **Efecto:**  
   - La primera `<meta>` indica palabras clave para buscadores.  
   - La segunda `<meta>` establece una fecha de expiración para el contenido.  
✅ **Elementos y atributos:**  
   - `<meta>` → **Elemento vacío** (No tiene cierre).  
   - `name="keywords"` → **Opcional:** Define palabras clave.  
   - `lang="es"` → **Opcional:** Especifica el idioma.  
   - `content="casa, compra, venta, alquiler"` → **Obligatorio:** Contenido de las palabras clave.  
   - `http-equiv="expires"` → **Opcional:** Indica que el contenido expirará.  
   - `content="16-Sep-2019 7:49 PM"` → **Obligatorio:** Fecha de expiración.  

---

### **2.e) Enlace `<a>`**  
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8"
rel="help">Resumen HTML </a>
```
✅ **Ubicación:** **`<body>`** (Define un enlace).  
✅ **Efecto:** Crea un enlace a "resumen.html".  
✅ **Elementos y atributos:**  
   - `<a>` → **Elemento de anclaje** (hipervínculo).  
   - `href="http://www.e-style.com.ar/resumen.html"` → **Obligatorio:** URL del destino.  
   - `type="text/html"` → **Opcional:** Tipo de contenido del enlace.  
   - `hreflang="es"` → **Opcional:** Idioma del destino.  
   - `charset="utf-8"` → **Opcional:** Codificación de caracteres.  
   - `rel="help"` → **Opcional:** Indica que el enlace es una ayuda.  

---

### **2.f) Tabla `<table>`**  
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
✅ **Ubicación:** **`<body>`** (Define una tabla).  
✅ **Efecto:** Crea una tabla con 3 columnas y 2 filas de datos.  
✅ **Elementos y atributos:**  
   - `<table>` → **Elemento contenedor de la tabla**.  
   - `width="200"` → **Opcional:** Ancho de la tabla.  
   - `summary="..."` → **Opcional:** Explicación de la tabla (usado para accesibilidad).  
   - `<caption>` → **Opcional:** Título de la tabla.  
   - `align="top"` → **Obsoleto:** Alineación del título.  
   - `<tr>` → **Obligatorio:** Define una fila.  
   - `<th>` → **Obligatorio:** Define una celda de encabezado.  
   - `scope="col"` → **Opcional:** Indica que es una columna.  
   - `scope="row"` → **Opcional:** Indica que es una fila.  
   - `<td>` → **Obligatorio:** Define una celda de datos.  
   - `&nbsp;` → **Opcional:** Espacio en blanco dentro de una celda vacía.  

