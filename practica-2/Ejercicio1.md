# CSS

## ¿Que es CSS y para qué se usa?
```
CSS son las siglas en inglés para hojas de estilo en cascada (Cascading Style Sheets). Básicamente, es un lenguaje que maneja el diseño y presentación de las páginas web, es decir, cómo lucen cuando un usuario las visita. Funciona junto con el lenguaje HTML que se encarga del contenido básico de los sitios.
Se les denomina hojas de estilo «en cascada» porque puedes tener varias y una de ellas con las propiedades heredadas (o «en cascada») de otras.
Con CSS, puedes crear reglas para decirle a tu sitio web cómo quieres mostrar la información y guardar los comandos para elementos de estilo (como fuentes, colores, tamaños, etc.) separados de los que configuran el contenido.
Además, puedes crear formatos específicos útiles para comunicar tus ideas y producir experiencias más agradables, en el aspecto visual, para los usuarios del sitio web.
```

## ¿Como funcionan las reglas para declaraciones de estilos?
```
Las reglas para declaraciones de estilos en CSS se utilizan para aplicar estilos a elementos HTML en una página web. Cada regla CSS consta de dos partes principales: un selector y una declaración de estilo.
Selector: El selector indica a qué elementos HTML se aplicarán los estilos. Puede ser un elemento específico, un grupo de elementos, clases, identificadores, atributos, pseudo-clases, entre otros.
Declaración de estilo: La declaración de estilo especifica el estilo que se aplicará a los elementos seleccionados. Consiste en una o más propiedades CSS y sus valores asociados. Cada declaración de estilo está encerrada entre llaves {} y termina con un punto y coma ;.

Un ejemplo de la sintaxis es:

selector {
    propiedad1: valor1;
    propiedad2: valor2;
    /* Más propiedades y valores */
}

```

## ¿ Cuáles son las tres formas de dar estilo a un documento?
```
En CSS, hay tres formas principales de aplicar estilos a un documento HTML: estilos en línea, estilos internos y estilos externos. Cada método tiene sus ventajas y desventajas según el contexto en el que se utilicen.
Estilos en línea (Inline CSS): Los estilos en línea se aplican directamente en los elementos HTML utilizando el atributo 'style'.
Estilos internos (Internal CSS): Los estilos internos se colocan dentro de una etiqueta <style> en la sección <head> de un documento HTML.
Estilos externos (External CSS): Los estilos externos se definen en un archivo CSS separado y se vinculan al documento HTML mediante la etiqueta <link> en la sección <head>.
```

## ¿ Cuáles son los distintos tipos de selectores más utilizados?
```
Los selectores mas utilizados son:

Selector de elemento: Este selector se aplica a todos los elementos de un tipo específico, como todos los párrafos (<p>) o todos los encabezados (<h1>).

p {
    color: blue;
}

Selector de clase: Se utiliza para seleccionar elementos con una clase específica. Los selectores de clase se definen usando un punto (.) seguido del nombre de la clase.

.mi-clase {
    background-color: yellow;
}

Selector de ID: Aplica estilos a un elemento específico identificado por un ID único. Se define con un signo de almohadilla (#) seguido del ID.

#mi-id {
    font-size: 20px;
}

Selector universal: El selector universal (*) selecciona todos los elementos de la página.

* {
    margin: 0;
    padding: 0;
}

Selector descendiente: Selecciona elementos que son descendientes (no necesariamente hijos directos) de un elemento especificado.

div p {
    color: green;
}

Selector de pseudo-clase: Las pseudo-clases seleccionan elementos en un estado específico, como cuando un enlace es visitado o cuando un elemento es el primero de su tipo.

a:hover {
    color: orange;
}

Selector de grupo: Permite aplicar el mismo estilo a varios selectores combinando varios selectores en una sola regla.

h1, h2, h3 {
    font-family: Arial, sans-serif;
}

```

## ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos 
```
Una pseudo-clase en CSS es una palabra clave que se añade a un selector para especificar un estado especial del elemento seleccionado. Las pseudo-clases permiten aplicar estilos a los elementos que están en un estado particular, como cuando un usuario pasa el ratón sobre un enlace, cuando un enlace ha sido visitado, o cuando un elemento es el primer hijo de su tipo.
Los vínculos <a> son uno de los elementos más comunes donde se utilizan pseudo-clases. Las pseudo-clases más utilizadas para vínculos son:

a:link {
    color: blue;
}                                                    Se aplica a los enlaces que aún no han sido visitados.

a:visited {
    color: purple;
}                                                    Se aplica a los enlaces que ya han sido visitados por el usuario.

a:hover {
    color: red;
    text-decoration: underline;
}                                                    Se aplica cuando el usuario coloca el puntero del ratón sobre el enlace.

a:active {
    color: orange;
}                                                    Se aplica cuando el enlace está siendo activado, es decir, cuando el usuario hace clic en él.

a:focus {
    outline: 2px solid blue;                                                   
}                                                    Se aplica cuando un enlace recibe el foco, por ejemplo, cuando se navega a través de la página usando la tecla "Tab".

```

##  ¿Qué es la herencia?
```
La herencia en CSS es un concepto fundamental que determina cómo los estilos aplicados a un elemento padre se transmiten automáticamente a sus elementos hijos. Es una característica que permite que ciertos valores de propiedad se "hereden" de un elemento a otro, haciendo que el código CSS sea más sencillo y más fácil de mantener.
```

## ¿ En que consiste el proceso denominado cascada ?
```
El proceso de la cascada en CSS es uno de los principios fundamentales que determina cómo se aplican los estilos a los elementos HTML cuando hay múltiples reglas que podrían coincidir con un mismo elemento. Este proceso decide qué estilos tienen prioridad y cómo se combinan, lo que permite la coexistencia de diferentes hojas de estilo y reglas.
```