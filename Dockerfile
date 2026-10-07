FROM node:22-bookworm-slim AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY templates ./templates
COPY postcss.config.js tsconfig.json vite.config.js ./
RUN npm run build

FROM composer:2 AS dependencies
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader

FROM dunglas/frankenphp:php8.5-bookworm AS production
WORKDIR /app

RUN install-php-extensions \
    bcmath \
    curl \
    intl \
    mbstring \
    opcache \
    pdo_mysql \
    pdo_sqlite \
    redis \
    zip \
    && printf '%s\n' \
        'opcache.enable=1' \
        'opcache.enable_cli=1' \
        'opcache.validate_timestamps=0' \
        'opcache.memory_consumption=256' \
        'opcache.interned_strings_buffer=32' \
        'opcache.max_accelerated_files=20000' \
        'realpath_cache_size=4096K' \
        'realpath_cache_ttl=600' \
        > /usr/local/etc/php/conf.d/zz-production.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY --from=dependencies /app/vendor ./vendor
COPY --from=frontend /app/public/build ./public/build
COPY . .
COPY docker/Caddyfile /etc/caddy/Caddyfile
COPY docker/entrypoint.sh /usr/local/bin/auctionly-entrypoint

RUN chmod +x /usr/local/bin/auctionly-entrypoint \
    && mkdir -p storage/framework/cache/data storage/framework/cache/locks storage/framework/sessions storage/framework/views storage/logs storage/app/public \
    && chown -R www-data:www-data /app

ENV APP_ENV=production \
    APP_DEBUG=false \
    SERVER_NAME=:80

EXPOSE 80

ENTRYPOINT ["auctionly-entrypoint"]
CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile", "--adapter", "caddyfile"]
