-- Inserts categorias
INSERT INTO categorias VALUES(null, 'Python');
INSERT INTO categorias VALUES(null, 'Java');
INSERT INTO categorias VALUES(null, 'PHP');
INSERT INTO categorias VALUES(null, 'Javascript');

-- Inserts para entradas
INSERT INTO entradas VALUES(null, 1, 1, 'Programa con Django', 'Web Framework', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Novedades Java 12', 'Mira las novedades', CURDATE());
INSERT INTO entradas VALUES(null, 2, 1, 'Djando Rest', 'Aprende a hacer apis', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Curso php', 'Introduccion', CURDATE());
INSERT INTO entradas VALUES(null, 1, 4, 'Frameworks más populares', '1. React', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'Datascience con python', 'Mira las librerías', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Novedades php 8', 'Estas son las novedades', CURDATE());
