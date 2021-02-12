-- Mostrar todos los registros / filas de una tabla
SELECT email, nombre, apellidos FROM usuarios;

-- Mostrar todos los campos
SELECT * FROM usuarios;

-- Operadores aritmeticos
SELECT email, (4+7) AS operacion FROM usuarios;

-- Operador de ordenamiento
SELECT id, email, (4+7) AS operacion FROM usuarios ORDER BY email;

-- Funciones matemáticas
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.24) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.24) AS 'OPERACION' FROM usuarios;
SELECT PI() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.91, 2) AS 'OPERACION' FROM usuarios;
SELECT SQRT(7) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91, 1) AS 'OPERACION' FROM usuarios;

-- Funciones para textos
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT TRIM(CONCAT('          ',nombre, ' ', apellidos, '      ')) AS 'CONVERSION' FROM usuarios;