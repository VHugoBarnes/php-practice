-- Subconsultas:
-- Consultas que se ejecutan dentro de otras, también 
-- consiste en utilizar los resultados de la subconsulta para operar
-- en la consulta principal
-- 
-- Gracias a las Foreign Keys

SELECT * FROM USUARIOS WHERE id IN (SELECT usuario_id FROM entradas);
