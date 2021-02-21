-- Ejercicio 28. Mostrar todos los vendedores y el número de 
-- clientes. Se debe mostrar tengan cliente o no.

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor', COUNT(cl.id)
FROM vendedores v
LEFT JOIN clientes cl ON v.id = cl.vendedor_id
GROUP BY v.id;
