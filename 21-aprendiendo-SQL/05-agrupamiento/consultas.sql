-- Consultas de agrupamiento
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'Numero entradas', categoria_id FROM entradas GROUP BY categoria_id;