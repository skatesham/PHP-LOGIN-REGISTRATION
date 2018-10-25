#!/bin/bash

start() {
 sudo service mysql start
 sudo service apache2 start
 echo "Servidor Apache2 e Database MySql com remote acesso";
}

stop() {
 sudo service mysql stop
 sudo service apache2 stop
 echo "Servidor Desligado!"
}

case $1 in
  start|stop) $1;;
  restart) stop; start;;
  *) echo "Run as $0 <start|stop|restart>"; exit 1;;
esac