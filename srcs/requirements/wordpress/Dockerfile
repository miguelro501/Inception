# FROM	debian:buster 

# # update debian and install mariadb
# RUN	apt update 
# #install php
# RUN apt install -y wget php7.3 php-fpm php-mysql mariadb-client

# EXPOSE 9000

# COPY ./conf/wp-config.php /

# RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar	


# RUN chmod +x wp-cli.phar
# RUN mv wp-cli.phar /usr/local/bin/wp

# #Create the folder to enable php start
# RUN mkdir /run/php	

# #Launch script
# COPY ./tools/wordpress.sh /usr/local/bin/

# RUN ls /usr/local/bin/

# RUN chmod +x /usr/local/bin/wordpress.sh

# ENTRYPOINT ["/usr/local/bin/wordpress.sh"]

# WORKDIR /var/www/html/

# CMD ["/usr/sbin/php-fpm7.3", "-F"]

FROM debian:buster

RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod +x /var/www/wordpress.sh

ENTRYPOINT [ "/var/www/wordpress.sh" ]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]