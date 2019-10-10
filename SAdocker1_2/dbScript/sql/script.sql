/* tabla usuarios */
CREATE TABLE usuario (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(250) NOT NULL,
correo VARCHAR(100) NOT NULL,
pass VARCHAR(50) NOT NULL
);

/* usuario de prueba */
insert into usuario (nombre,correo,pass) values ('yo','yo@server.com','123');