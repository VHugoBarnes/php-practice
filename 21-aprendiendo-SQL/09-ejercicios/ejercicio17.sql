-- Ejercicio 17. Obtener listado con los encargos realizados
-- por el cliente 'Frutería Antonia Inc'

SELECT *
FROM encargos
WHERE cliente_id 
IN (
    SELECT id
    FROM clientes
    WHERE nombre = 'Fruteria Antonia Inc'
);
