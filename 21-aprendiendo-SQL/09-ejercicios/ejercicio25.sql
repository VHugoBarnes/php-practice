-- Ejercicio 25. Obtener una lista de los nombres de los clientes
-- con el importe de sus encargos acumulado

SELECT cl.nombre, SUM(e.cantidad * co.precio)
FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id;

SELECT ci.nombre, SUM(precio*cantidad) AS 'Importe'
FROM clientes ci
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;
