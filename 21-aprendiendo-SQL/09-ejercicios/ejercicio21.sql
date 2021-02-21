-- Ejercicio 21. Obtener los nombres y ciudades de los clientes
-- con encargos de 3 unidades en adelante

SELECT c.id, c.nombre, c.ciudad
FROM clientes c
INNER JOIN encargos e ON e.cliente_id = c.id AND e.cantidad >= 3;
