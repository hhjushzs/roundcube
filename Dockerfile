FROM php:8.1-apache

# 安装必要的PHP扩展和依赖
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# 下载并解压 Roundcube
RUN curl -L -o roundcube.tar.gz https://github.com/roundcube/roundcubemail/releases/download/1.6.4/roundcubemail-1.6.4-complete.tar.gz \
    && tar xf roundcube.tar.gz \
    && mv roundcubemail-1.6.4/* /var/www/html/ \
    && chown -R www-data:www-data /var/www/html \
    && rm roundcube.tar.gz

# 复制配置文件
COPY config.inc.php /var/www/html/config/

# 配置 Apache
RUN a2enmod rewrite
