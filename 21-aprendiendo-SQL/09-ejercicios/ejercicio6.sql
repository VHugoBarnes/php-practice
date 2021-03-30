-- Ejercicio 6. Visualizar el nombre y apellidos de los vendedores en una misma columna,
-- su fecha de registro y el dia de la semana en que se registraron

SELECT CONCAT(nombre, '', apellidos), fecha, DAYOFWEEK(fecha) AS 'Dia de la semana'
FROM vendedores;