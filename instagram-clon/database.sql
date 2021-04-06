CREATE DATABASE IF NOT EXISTS laravel_master;

USE laravel_master;

CREATE TABLE IF NOT EXISTS users(
    id              int(255) auto_increment not null,
    role            varchar(20),
    name            varchar(100),
    surname         varchar(200),
    nick            varchar(100),
    email           varchar(255),
    password        varchar(255),
    image           varchar(255),
    created_at       datetime,
    updated_at       datetime,
    remember_token  varchar(255),

    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO users VALUES(null, 'user', 'Víctor', 'Vázquez', 'vhugobarnes', 'hugovg799@gmail.com', null, 'test', CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(null, 'user', 'Keko', 'Kaka', 'kekokaka', 'keko@gmail.com', null, 'test', CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(null, 'user', 'Malia', 'Kaka', 'maliakaka', 'malia@gmail.com', null, 'test', CURTIME(), CURTIME(), null);

CREATE TABLE IF NOT EXISTS images(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_path      varchar(255),
    description     text,
    created_at       datetime,
    updated_at       datetime,

    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT fk_images_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDB;

INSERT INTO images VALUES(Null, 1, 'test.jpg', 'descripcion de prueba 1', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 1, 'gato.jpg', 'descripcion de prueba 2', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 1, 'perro.jpg', 'descripcion de prueba 3', CURTIME(), CURTIME());

INSERT INTO images VALUES(Null, 2, 'persona.jpg', 'descripcion de prueba 4', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 2, 'auto.jpg', 'descripcion de prueba 5', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 2, 'paisaje.jpg', 'descripcion de prueba 6', CURTIME(), CURTIME());

INSERT INTO images VALUES(Null, 3, 'comida.jpg', 'descripcion de prueba 7', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 3, 'cafe.jpg', 'descripcion de prueba 7', CURTIME(), CURTIME());
INSERT INTO images VALUES(Null, 3, 'juego.jpg', 'descripcion de prueba 7', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments(
    id          int(255) auto_increment not null,
    user_id     int(255),
    image_id    int(255),
    content     text,
    created_at   datetime,
    updated_at   datetime,

    CONSTRAINT pk_comments PRIMARY KEY(id),
    CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;

INSERT INTO comments VALUES(Null, 1, 4, 'Comentario 1', CURTIME(), CURTIME());
INSERT INTO comments VALUES(Null, 2, 1, 'Comentario 2', CURTIME(), CURTIME());
INSERT INTO comments VALUES(Null, 3, 2, 'Comentario 3', CURTIME(), CURTIME());
INSERT INTO comments VALUES(Null, 3, 3, 'Comentario 4', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes(
    id          int(255) auto_increment not null,
    user_id     int(255),
    image_id    int(255),
    created_at  datetime,
    updated_at  datetime,

    CONSTRAINT pk_likes PRIMARY KEY(id),
    CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;

INSERT INTO likes VALUES(Null, 1, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES(Null, 2, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(Null, 3, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(Null, 2, 2, CURTIME(), CURTIME());
