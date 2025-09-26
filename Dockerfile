FROM php:8.1-apache
WORKDIR /var/www/html
COPY . .

RUN apt-get update && apt-get install -y libzip-dev zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'ed0feb545ba87161262f2d45a633e34f591ebb3381f2e0063c345ebea4d228dd0043083717770234ec00c5a9f9593792') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./docker/xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini

RUN composer install

EXPOSE 80