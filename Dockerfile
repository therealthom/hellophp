FROM registry.access.redhat.com/ubi8/php-74:1-47
WORKDIR /var/www/html
COPY index.php index.php
EXPOSE 80
