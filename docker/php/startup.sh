#!/bin/bash

cd /work/web
php artisan migrate:refresh --seed
/usr/local/sbin/php-fpm
