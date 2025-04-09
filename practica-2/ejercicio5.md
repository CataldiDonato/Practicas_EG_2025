1. Los textos enfatizados dentro de cualquier título deben ser rojos.

h1 em, h2 em, h3 em, h4 em, h5 em, h6 em {
    color: red;
}

# uso 'em' ya que es el selector de énfasis y lo ubico dentro de todos los posibles títulos. 

2. Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a 
su vez esté dentro de un bloque debe ser color negro.

div p a[href], section p a[href], article p a[href] {
    color: black;
}


3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser 
amarillo pero si es un enlace a otra página debe ser azul.

#último ul li {
    color: yellow;
}

#último ul li a {
    color: blue;
}

# identifiamos a las listas con 'li' y para identificar los enlaces usamos 'a'


4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si 
están dentro de un título deben ser rojos.

div .importante, section .importante, article .importante {
    color: green;
}

# dentro de cualquier bloque en verde.

h1 .importante, h2 .importante, h3 .importante, h4 .importante, h5 .importante, h6 .importante {
    color: red;
}

# los ubicamos dentro de los títulos para que se vean rojos. 


5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules.

h1[title] {
    color: blue;
}

6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta 
para los ya visitados y, además, no deben aparecer subrayados.

ol a:link {
    color: blue;
    text-decoration: none;
}

ol a:visited {
    color: violet;
    text-decoration: none;
}

# para decir que es un enlace marcamos 'a' y para que sea una lista ordenada 'ol'