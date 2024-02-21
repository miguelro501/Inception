FROM	debian:buster 

# update debian and install mariadb
RUN	apt update 
#install php
RUN apt install -y wget php7.3 php-fpm php-mysql mariadb-client

EXPOSE 9000

COPY ./conf/wp-config.php /

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar	


RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

#Create the folder to enable php start
RUN mkdir /run/php

#Launch script
COPY ./tools/create_wordpress.sh /usr/local/bin/
ENTRYPOINT ["create_wordpress.sh"]

WORKDIR /var/www/html/

CMD ["/usr/sbin/php-fpm7.3", "-F"]