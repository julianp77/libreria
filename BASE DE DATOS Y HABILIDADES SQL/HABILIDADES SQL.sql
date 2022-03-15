use ejercicio;

###HICE LOS EJERCICIOS A BASE DE LA BASE DE DATOS QUE HICE PARA EL CRUD EN LARAVEL


###3. SQL que consulta el "nombre" y "precio" de los "productos" ordenados de menor a mayor precio.
SELECT nombre,precio FROM libros ORDER BY precio asc;


###4. SQL que actualice el precio y cantidad de un producto;
UPDATE libros SET precio=10.000, cantidad=10 WHERE id= 2;


###5.SQL que cuente las cantidades de productos en general.
SELECT SUM(cantidad) FROM libros;

##6. SQL que elimine el último producto creado.
DELETE FROM libros WHERE id=6;

SELECT * FROM ejercicio.libros;