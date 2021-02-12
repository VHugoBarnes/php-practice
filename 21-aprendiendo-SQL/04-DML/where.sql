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