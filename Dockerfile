FROM php:8.1-apache

# Устанавливаем расширение PDO MySQL для работы с базой данных
RUN docker-php-ext-install pdo pdo_mysql

# Копируем все файлы сайта в веб-директиву Apache
COPY . /var/www/html/

# Открываем порт 80 (стандартный для веб-серверов)
EXPOSE 80