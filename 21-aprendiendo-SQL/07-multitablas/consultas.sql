-- Consulta multitabla:
-- Consultas que sirven para consultar varias tablas en una sola sentencia

-- Mostrar las entradas con el nombre del autor y el nombre de la categoría
SELECT u.nombre AS 'Usuario', e.titulo, c.nombre AS 'Categoria'
FROM entradas e, usuarios u , categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

-- Mostrar el nombre de las categorías y de lado cuántas entradas tienen
SELECT c.nombre AS 'Categorias', COUNT(e.id)
FROM categorias c, entradas e
WHERE e.categoria_id = c.id
GROUP BY e.categoria_id;

-- Mostrar el email de los usuarios y de lado cuántas entradas tienen
SELECT u.email, COUNT(e.id) AS "N° de entradas"
FROM usuarios u, entradas e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;
