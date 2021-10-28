## Description

Advance crude operation with pagination using laravel framework

## How to use the CLI terminal command 

Install PHP
brew install php

Install composer - a dependency manager for php applications
Use script below or follow instructions on https://getcomposer.org/download/

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
This generates composer.phar file to pwd. You can move this to some directory that is in your path. For example

mv composer.phar /usr/local/bin/composer
This makes it available for your user only and avoids requiring root permissions. Use command composer to run it.

Install application dependencies
composer install

 Database setup
 Run php artisan make:model Student -m   to create a model 

 Run  php artisan migrate  to migrate model to the database(MYSQl)

