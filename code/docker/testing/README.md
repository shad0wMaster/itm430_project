## How to connect to mysql with docker

### First create the container
* Run this command
* docker run --name mysql_test -e MYSQL_ROOT_PASSWORD=mysecretpw -v /var/lib/mysq; -d mariadb:latest
