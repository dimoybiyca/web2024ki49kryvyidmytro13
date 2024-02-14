FROM ubuntu:latest
LABEL authors="llemon-cat"

ENTRYPOINT ["top", "-b"]