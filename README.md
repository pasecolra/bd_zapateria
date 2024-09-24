# bd_zapateria base de datos para una zapateria

## Modelo Entidad-Relacion

![Modelo Entidad-Relacion](img/bd_zapateria.png "Modelo Entidad-Relacion")

## Modelo Fisico de la BD

![Modelo Fisico](img/modelo_fisico.png "Modelo fisico")

## tabla fabricante

![tabla fabricante](img/fabricantetable.png "tabla fabricante")

## tabla articulo

![tabla articulo](img/articulotable.png "tabla articulo")


## consultas a la bd

1. Mostrar la lista de todos datos de los fabricantes

`SELECT * FROM fabricante;`

![consulta](img/pepe.png "consulta1")

2. Mostrar la lista de nombres de los fabricantes 

`SELECT nombre_fabricante AS fabricante FROM fabricante;`

![consulta](img/fabricantetable.png "consulta2")

3. Mostrar los nombres de los productos.

`SELECT nombre_articulo FROM * articulo`

![consulta3](img/rt4.png "consulta3")

4. mostrar los precios de los nombres de los productos

`SELECT nombre_articulo AS Nombre, precio_articulo AS Precio FROM Articulo;`

![consulta4](img/rt3.png "consulta4")

5. Obtener los nombres de los articulos cuyos precios sean mayor a 50000

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo > 50000;`

![consulta5](img/consulta5.png)

6. Obtener el nombre de los articulos cuyo precio este entre 5000 y 40000 ambos incluidos 

## Forma 1
`SELECT nombre_articulo FROM Articulo WHERE precio_articulo >= 5000 AND precio_articulo <= 40000;`
![consulta5](img/consulta61.png)
## Forma 2
`SELECT nombre_articulo FROM Articulo WHERE precio_articulo BETWEEN 5000 AND 40000;`

![consulta5](img/consulta6.png)


