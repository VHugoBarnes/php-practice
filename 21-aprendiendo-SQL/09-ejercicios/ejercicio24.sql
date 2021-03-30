-- Ejercicio 24. Listar todos los encargos con el nombre del coche,
-- el nombre del cliente y el nombre de la ciudad, pero únicamente
-- cuando sean de Barcelona

SELECT co.modelo, cl.nombre, cl.ciudad
FROM encargos en
INNER JOIN coches co ON co.id = en.coche_id
INNER JOIN clientes cl ON cl.id = en.cliente_id AND cl.ciudad = 'Barcelona';