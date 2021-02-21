-- Ejercicio 27. Visualizar todos los nombres de los clientes
-- y la cantidad de encargos realizados, incluyendo los que hayan
-- realizado encargos.

SELECT cl.nombre, COUNT(en.id)
FROM clientes cl
INNER JOIN encargos en ON cl.id = en.cliente_id
GROUP BY 1;
