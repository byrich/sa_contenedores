# Mysql-docker

Dentro de esta carpeta se encuentra la configuracion necesaria para poder levantar un servidor de base de datos mysql.

## dockerfile

Tiene la configuracion MYSQL de:
- db name
- user name
- user pass
- root pass

## como usarlo

1. Extraer toda la carpeta dbScript
2. construir la imagen con el dockerfile:
    - sudo docker build -t byrich/mysql .
    - donde "byrich/mysql" es cualquier nombre para la imagen.
3. correr el siguiente script:
    - sudo docker run --name db -p3306:3306 -d byrich/mysql --default-authentication-plugin=mysql_native_password
    - donde "db" es cualquier nombre para el contenedor.


