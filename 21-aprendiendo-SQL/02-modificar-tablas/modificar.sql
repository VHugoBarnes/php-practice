# Renombrar una tabla #

ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar columna sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;