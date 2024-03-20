FROM mysql:8.0.22

ENV MYSQL_DATABASE web
ENV MYSQL_USER web_user
ENV MYSQL_PASSWORD some_strong_password
ENV MYSQL_ROOT_PASSWORD root_password

COPY init.sql /docker-entrypoint-initdb.d/

EXPOSE 3306
