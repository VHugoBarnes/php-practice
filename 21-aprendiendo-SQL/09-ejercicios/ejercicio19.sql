-- Ejercicio 19. Obtener los vendedores con 2
-- o más clientes

SELECT v.*, COUNT(v.id)
FROM vendedores v
INNER JOIN clientes c ON c.vendedor_id = v.id
GROUP BY c.vendedor_id;

SELECT *
FROM vendedores
WHERE id 
IN (
    SELECT vendedor_id
    FROM clientes
    GROUP BY vendedor_id HAVING COUNT(id) >= 2
);
