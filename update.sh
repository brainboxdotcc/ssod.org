#!/bin/sh
rsync -av vite.config.js package-lock.json package.json composer.* config database app tests resources routes ssod@beholder:/var/www/vhosts/ssod.org/
ssh ssod@beholder "cd /var/www/vhosts/ssod.org; npm i; npm run build; composer i; php artisan view:cache; php artisan migrate --no-interaction --force"

