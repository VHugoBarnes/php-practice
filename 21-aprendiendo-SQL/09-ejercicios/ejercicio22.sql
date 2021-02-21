-- Ejercicio 22. Mostrar el listado de clientes (número de cliente y nombre)
-- mostrar también el número de vendedor y su nombre

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor'
FROM clientes c
INNER JOIN vendedores v ON (c.vendedor_id = v.id);
