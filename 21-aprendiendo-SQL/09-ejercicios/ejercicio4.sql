-- Ejercicio 4. Sacar todos los vendedores cuya fecha
-- de alta sea posterior al 16 de febrero del 2021

SELECT nombre, apellidos
FROM vendedores
WHERE DATE(fecha) > '2021-02-16';