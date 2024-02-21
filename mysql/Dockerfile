FROM mysql:8.0.22

ENV MYSQL_DATABASE "database"
ENV MYSQL_USER "user"
ENV MYSQL_PASSWORD "password"
ENV MYSQL_ROOT_PASSWORD "root_password"

COPY init.sql /docker-entrypoint-initdb.d/

EXPOSE 3306
