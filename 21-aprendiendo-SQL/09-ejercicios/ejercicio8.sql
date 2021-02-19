-- Ejercicio 8. Visualizar todos los coches cuya marca exista la
-- letra 'A' y cuyo modelo empieze por F.

SELECT modelo, marca
FROM coches
WHERE marca LIKE '%a%' AND modelo LIKE 'f%';