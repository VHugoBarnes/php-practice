# Insertar datos #
INSERT INTO usuarios VALUES(null, 'Victor', 'Vázquez', 'hugo@mail.com', 'prueba', '2021-02-10');
INSERT INTO usuarios VALUES(null, 'Malia', 'Kaka', 'malia@mail.com', 'prueba', '2021-02-10');
INSERT INTO usuarios VALUES(null, 'Keko', 'Kaka', 'keko@mail.com', 'prueba', '2021-02-10');

# Insertar filas solo con ciertas columnas #
INSERT INTO usuarios(id, nombre, email, password, fecha) VALUES(null, 'Admin','admin@admin.com', 'pass', '2021-02-09');

