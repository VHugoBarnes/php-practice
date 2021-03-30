-- Ejercicio 30. Mostrar los datos del vendedor
-- con más antiguedad en el concesionario.

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

-- Ejercicio 31. Obtener el coche con más unidades vendidas

SELECT * FROM coches WHERE id IN (
    SELECT coche_id FROM encargos WHERE cantidad IN (
        SELECT MAX(cantidad) FROM encargos
    )
);
