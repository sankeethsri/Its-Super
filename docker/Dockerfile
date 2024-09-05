FROM php:8.3-fpm-alpine AS app

RUN { \
    echo '[www]'; \
    echo '; application logs are more useful'; \
    echo 'access.log = /dev/null'; \
} | tee /usr/local/etc/php-fpm.d/logging.conf

RUN set -eux; \
    apk --update add --no-cache --virtual .build-deps \
        gmp-dev \
        icu-dev \
        libretls-dev \
        libxml2-dev \
        libzip-dev \
        linux-headers \
        zlib-dev \
        ${PHPIZE_DEPS} \
    ; \
    apk -U upgrade; \
    docker-php-ext-configure zip; \
    docker-php-ext-install \
        gmp \
        intl \
        pcntl \
        pdo_mysql \
        sockets \
        zip; \
    pecl install apcu; \
    pecl clear-cache; \
    docker-php-ext-enable \
            apcu \
            opcache \
    ; \
    RUNDEPS="$( \
        scanelf --needed --nobanner --format '%n#p' --recursive /usr/local/lib/php/extensions \
            | tr ',' '\n' \
            | sort -u \
            | awk 'system("[ -e /usr/local/lib/" $1 " ]") == 0 { next } { print "so:" $1 }' \
    )"; \
    apk upgrade; \
    apk add --no-cache --virtual .run-deps ${RUNDEPS}; \
    apk del .build-deps;

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

RUN set -xe; \
    mkdir ~/.composer; \
    apk --update add --no-cache git;

# Use the default production configuration
RUN ln -s ${PHP_INI_DIR}/php.ini-production ${PHP_INI_DIR}/php.ini \
    && sed -i -e "s/^ *memory_limit.*/memory_limit = 512M/g"  ${PHP_INI_DIR}/php.ini

COPY docker/php/conf.d/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

# Copy default settings
COPY docker/php/conf.d/immediate.ini ${PHP_INI_DIR}/conf.d/immediate.ini

COPY --chown=www-data:www-data app/composer.* app/symfony.lock ./

RUN set -xe; \
    composer install --prefer-dist --no-dev --no-scripts --no-progress --ignore-platform-reqs --no-interaction; \
    composer clear-cache;

COPY --chown=www-data:www-data app ./

RUN composer dump-autoload --classmap-authoritative; \
    composer run-script --no-dev post-install-cmd; \
    composer dump-env prod; \
    chmod -R 777 var;

COPY docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]

USER root

WORKDIR /var/www/html

FROM nginx:1.23-alpine as web

WORKDIR /var/www/html

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/
COPY --from=app /var/www/html/public ./public