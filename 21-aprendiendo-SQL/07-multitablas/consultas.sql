-- Consulta multitabla:
-- Consultas que sirven para consultar varias tablas en una sola sentencia

-- Mostrar las entradas con el nombre del autor y el nombre de la categoría
SELECT u.nombre AS 'Usuario', e.titulo, c.nombre AS 'Categoria'
FROM entradas e, usuarios u , categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;
