-- Consulta con una condición
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

-- Operadores de comparación --
-- Igual        =
-- Distinto     !=
-- Menor que    < || <=
-- Mayor que    > || >=
-- Entre        BETWEEN a AND b
-- En           in
-- Es nulo      is null
-- No es nulo   is not null
-- Como         LIKE
-- No es como   NOT LIKE

-- Ejemplos

-- Mostrar nombres y apellidos de todos los usuarios registrados el día 9
SELECT nombre, apellidos FROM usuarios WHERE DAY(fecha) = 09;

-- Mostrar nombres y apellidos de todos los usuarios NO registrados el día 9
SELECT nombre, apellidos FROM usuarios WHERE DAY(fecha) != 09;


-- OPERADORES LÓGICOS --
-- O    OR
-- Y    AND
-- NO   NOT

-- COMODINES --
-- Cualquier cantidad de caracteres: %
-- Caracter desconocido: _

-- Mostrar el email de los usuarios cuyo apellido contenga la letra A
-- y que la contraseña sea 'prueba'
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 'prueba';

-- Sacar todos los registros de la tabla usuarios cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

-- Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 4 letras
-- y que se hayan registrado antes del 2022, y mostrar el nombre en mayúsculas
SELECT *, UPPER(nombre) AS nombre FROM usuarios WHERE LENGTH(nombre) > 4 AND YEAR(fecha) < 2022;

-- Limit y order by
SELECT * FROM usuarios ORDER BY fecha DESC;
SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 0, 3;
