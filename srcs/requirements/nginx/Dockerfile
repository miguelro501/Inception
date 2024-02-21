FROM	debian:buster 

# update debian and install nginx
RUN	apt update 
RUN	apt install nginx -y

# make ssl (-p for extra permission)
RUN mkdir /etc/nginx/ssl

RUN apt install openssl -y

# generate ssl certificate, key, and subj for extra info
RUN openssl req -x509 -nodes \
	-out /etc/nginx/ssl/miguelro.crt \
    -keyout /etc/nginx/ssl/miguelro.key \
    -subj "/C=PT/ST=Lisboa/L=Lisboa/O=42 School/OU=miguelro/CN=miguelro/"

COPY ./conf/nginx.conf /etc/nginx/conf.d

# nginx config
RUN mkdir /run/nginx

# allowed ports
EXPOSE	443

# Run nginx
CMD ["nginx", "-g", "daemon off;"]