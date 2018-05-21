FROM ubuntu:18.04

MAINTAINER Luan Almeida <luanlmd@gmail.com>

RUN apt update
RUN apt upgrade -y

RUN DEBIAN_FRONTEND=noninteractive apt install -y tzdata

RUN apt install ca-certificates nano -y
RUN apt install memcached -y
RUN apt install nginx -y
RUN apt install php php-fpm php-curl php-memcached -y
RUN apt clean

RUN useradd docker
RUN adduser www-data docker

CMD /etc/init.d/memcached start && /etc/init.d/php7.2-fpm start && nginx -g "daemon off;"
