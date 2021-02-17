-- Ejercicio 2. Modificar la comision de los vendedores y ponerla
-- al 2% cuando ganan más de 50,000
UPDATE vendedores 
SET comision=2 
WHERE sueldo > 50000;
