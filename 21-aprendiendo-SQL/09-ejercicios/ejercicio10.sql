-- Ejercicio 10. Visualizar los apellidos de los vendedores, su fecha y 
-- su numero de grupo, ordenado por fecha descendente, mostrar los 4 últimos

SELECT apellidos, fecha, grupo_id
FROM vendedores
ORDER BY fecha DESC
LIMIT 4;