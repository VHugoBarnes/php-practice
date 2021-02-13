-- Subconsultas:
-- Consultas que se ejecutan dentro de otras, también 
-- consiste en utilizar los resultados de la subconsulta para operar
-- en la consulta principal
-- 
-- Gracias a las Foreign Keys

-- Sacar usuarios con entradas
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

-- Más ejemplos
-- Sacar los usuarios que tengan una entrada que en su titulo hable de novedades
SELECT * 
FROM usuarios 
WHERE id 
IN (SELECT usuario_id 
    FROM entradas 
    WHERE titulo 
    LIKE "%novedades%");

-- Sacar todas las entradas de la categoría acción utilizando su nombre

-- Mostrar las categorías con más de 3 entradas

-- Mostrar los usuarios que crearon una entrada el viernes

-- Mostrar el nombre del usuario que tenga más entradas

-- Categorías sin entradas
