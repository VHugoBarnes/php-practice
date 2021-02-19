-- Ejercicio 5. Mostrar todos los vendedores con su nombre y el
-- numero de días que llevan en el concesionario.

SELECT nombre, apellidos, DATEDIFF(CURDATE(), fecha)
FROM vendedores;