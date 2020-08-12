FROM php:7.4-apache

## enable rewrite engine within apache to act on .htaccess files
RUN a2enmod rewrite headers

COPY public_html/ /var/www/html/

## replace .htaccess with .htaccess.dev 
RUN mv /var/www/html/.htaccess.dev /var/www/html/.htaccess