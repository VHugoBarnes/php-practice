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

-- Sacar todas las entradas de la categoría Python utilizando su nombre
SELECT titulo, descripcion 
FROM entradas 
WHERE categoria_id 
IN (SELECT id 
    FROM categorias 
    WHERE nombre = 'Python');

-- Mostrar las categorías con más de 3 entradas
SELECT nombre
FROM categorias
WHERE id
IN (SELECT categoria_id
    FROM entradas
    GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

-- Mostrar los usuarios que crearon una entrada el wednesday
SELECT nombre, apellidos
FROM usuarios
WHERE DAYNAME(fecha) = 'wednesday';

-- Mostrar el nombre del usuario que tenga más entradas
SELECT nombre, apellidos
FROM usuarios
WHERE id
IN (
    SELECT MAX(usuario_id)
    FROM entradas
);

-- Categorías sin entradas
SELECT id, nombre
FROM categorias
WHERE id NOT IN (
    SELECT categoria_id
    FROM entradas
);
