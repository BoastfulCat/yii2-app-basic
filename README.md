REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

CONFIGURATION
-------------

### composer

install composer packeges

    composer install

### Local env

make copy local.example.php to config/local.php and configure local env

    cp config/local.example.php config/local.php
    
base.php - common config for console and web part of project
console.php - config for console part
web.php - config for web part
local.php - local config for all parts

### Database

migration

    ./yii migrate
    
demo data

    ./yii fixture "*"