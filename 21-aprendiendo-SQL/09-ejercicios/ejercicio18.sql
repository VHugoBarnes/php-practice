-- Ejercicio 18. Listar los clientes que han hecho 
-- algún encargo del coche "Mercedes Ranchera"

-- SELECT cl.nombre
-- FROM clientes cl
-- INNER JOIN encargos e ON e.cliente_id = cl.id
-- INNER JOIN coches co ON co.id = 3;

SELECT *
FROM clientes
WHERE id 
IN (
    SELECT cliente_id
    FROM encargos
    WHERE coche_id
    IN (
        SELECT id
        FROM coches
        WHERE modelo LIKE '%ranchera%'
    )
);
