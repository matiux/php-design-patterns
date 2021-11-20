FROM matiux/php:7.4-fpm-bullseye-dev

USER root

###> Configurazione Xdebug
COPY conf/xdebug-starter.sh /usr/local/bin/xdebug-starter
RUN chmod +x /usr/local/bin/xdebug-starter
RUN /usr/local/bin/xdebug-starter
###> Fine configurazione Xdebug

RUN /usr/local/bin/composer self-update

USER www-data
