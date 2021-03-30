-- Consultas de agrupamiento
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'Numero entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- Consultas de agrupamiento con condiciones
SELECT COUNT(titulo) AS 'Numero entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 10;

-- Funciones de agrupamiento
-- AVG      Sacar la media
-- COUNT    Contar el número de elementos
-- MAX      Valor máximo del grupo
-- MIN      Valor minímo del grupo
-- SUM      Sumar todo el contenido del grupo
SELECT AVG(id) AS 'media de entradas' FROM entradas;
SELECT MAX(id) AS 'Maximo ID', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de ids', titulo FROM entradas;