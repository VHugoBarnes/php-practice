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

-- Funciones para fechas
SELECT email, fecha, CURDATE() FROM usuarios;
SELECT email, DAYNAME(fecha) FROM usuarios;
SELECT email, DAYOFMONTH(fecha) FROM usuarios;
SELECT email, DAYOFWEEK(fecha) FROM usuarios;
SELECT email, DAYOFYEAR(fecha) FROM usuarios;
SELECT email, MONTH(fecha) FROM usuarios;
SELECT email, YEAR(fecha) FROM usuarios;
SELECT email, DAY(fecha) FROM usuarios;
SELECT email, HOUR(fecha) FROM usuarios;
SELECT email, MINUTE(fecha) FROM usuarios;
SELECT email, MINUTE(fecha) FROM usuarios;
SELECT email, CURTIME() FROM usuarios;
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

-- Funciones generales
SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('keko', 'keko') FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT IFNULL(apellidos, 'VOID') FROM usuarios;

