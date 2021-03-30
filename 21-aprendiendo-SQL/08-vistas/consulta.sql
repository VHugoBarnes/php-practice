-- Vistas
-- Una consulta almacenada en la base de datos que se utiliza como una tabla
-- virtual. No almacena datos sino utiliza asociaciones y los datos originales
-- de las tablas de forma que siempre está actualizada.

CREATE VIEW entradas_con_nombres AS
SELECT u.nombre AS 'Usuario', e.titulo, c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

-- Eliminar vista
DROP VIEW entradas_con_nombres;
