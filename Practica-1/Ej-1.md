### **1. Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?**  
**HTML (HyperText Markup Language)** es el lenguaje de marcado estándar para crear páginas web. Define la estructura de los documentos mediante etiquetas.  

- **Fue creado en 1991** por **Tim Berners-Lee**.  
- **Versiones principales:**  
  - **HTML 1.0 (1993):** Primera versión pública.  
  - **HTML 2.0 (1995):** Añadió soporte para formularios.  
  - **HTML 3.2 (1997):** Introdujo tablas y scripts.  
  - **HTML 4.01 (1999):** Mejor soporte de estilos y accesibilidad.  
  - **XHTML (2000):** Basado en XML, más estricto.  
  - **HTML5 (2014, actualizado en 2021):** Introdujo etiquetas semánticas, audio, video y APIs avanzadas.  

📌 **Última versión:** **HTML5 (actualizado en 2021)**.  

---

### **2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?**  
El **W3C (World Wide Web Consortium)** recomienda:  
1. **Accesibilidad:** Permitir que personas con discapacidades puedan usar la web.  
2. **Estructura semántica:** Usar etiquetas adecuadas (`<header>`, `<article>`, `<nav>`...).  
3. **Separación de contenido y presentación:** HTML para estructura, CSS para diseño.  
4. **Compatibilidad:** Garantizar que funcione en diferentes navegadores y dispositivos.  
5. **Uso de estándares abiertos:** Seguir las recomendaciones oficiales del W3C.  

---

### **3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?**  
- **Desaprobado (deprecated):** Se desaconseja su uso porque hay alternativas mejores, pero sigue funcionando.  
  - Ejemplo: `<font>`, `<center>`, `align`.  
- **Obsoleto (obsolete):** Eliminado del estándar y puede que ya no funcione en navegadores modernos.  
  - Ejemplo: `<applet>`, `<blink>`, `<marquee>`.  

📌 **Diferencia clave:** Desaprobado aún puede funcionar, obsoleto ya no.  

---

### **4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?**  
**DTD (Document Type Definition)** define las reglas para escribir un documento HTML válido.  

En **HTML 4.01**, había tres tipos de **DTD**:  
1. **Strict:** No permite elementos obsoletos ni atributos de presentación.  
   ```html
   <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
   ```
2. **Transitional:** Permite algunos elementos de presentación para compatibilidad.  
   ```html
   <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   ```
3. **Frameset:** Para páginas con marcos (`<frameset>` en lugar de `<body>`).  
   ```html
   <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
   ```

📌 **HTML5 eliminó los DTDs** y usa solo:  
```html
<!DOCTYPE html>
```

---

### **5. Qué son los metadatos y cómo se especifican en HTML?**  
Los **metadatos** son información sobre la página web que no se muestra al usuario pero es útil para buscadores y navegadores.  

Se definen en la etiqueta `<meta>` dentro de `<head>`.  

📌 **Ejemplos de metadatos en HTML5:**  
```html
<meta charset="UTF-8">  <!-- Codificación de caracteres -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Diseño responsive -->
<meta name="description" content="Ejemplo de página web con HTML5.">  <!-- Descripción para buscadores -->
<meta name="author" content="Juan Pérez">  <!-- Autor de la página -->
<meta name="keywords" content="HTML, CSS, Web">  <!-- Palabras clave -->
```