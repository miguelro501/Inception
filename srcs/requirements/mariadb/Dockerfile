FROM	debian:buster 

# update debian and install mariadb
RUN	apt update 
RUN	apt install -y mariadb-server

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf


COPY ./conf/mariadb.sh /

RUN chmod +x /mariadb.sh

CMD ["/mariadb.sh"]



