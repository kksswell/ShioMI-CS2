FROM php:8.1-apache

# Устанавливаем расширения для работы с MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Настраиваем Apache, чтобы он слушал порт, который выдает Render
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Копируем файлы сайта
COPY . /var/www/html/

# Даем права на чтение файлов (с большой буквы -R)
RUN chown -R www-data:www-data /var/www/html