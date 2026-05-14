FROM docker.arvancloud.ir/dunglas/frankenphp:php8.3

RUN install-php-extensions \
    pdo_mysql \
    mbstring \
    bcmath \
    pcntl \
    zip \
    opcache

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

EXPOSE 8000

CMD ["php", "artisan", "octane:start", "--server=frankenphp", "--host=0.0.0.0", "--port=8000"]
