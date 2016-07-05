#!/bin/bash

cd /var/www
composer install 
php public/index.php development enable 
/etc/init.d/mysql start 

if [ "$RESET_DB" ]; then
  ./vendor/bin/phing reset-db 
fi

./vendor/bin/phing setup 
