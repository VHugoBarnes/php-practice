-- Mostrar todos los registros / filas de una tabla
SELECT email, nombre, apellidos FROM usuarios;

-- Mostrar todos los campos
SELECT * FROM usuarios;

-- Operadores aritmeticos
SELECT email, (4+7) AS operacion FROM usuarios;

-- Operador de ordenamiento
SELECT id, email, (4+7) AS operacion FROM usuarios ORDER BY email;

