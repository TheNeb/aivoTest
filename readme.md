AivoTest app

Author: Mauro Pisano

This app uses the library TwitterOAuth.
This app uses the frameworks SlimPHP and PHPUnit.

NOTE:if the following installations steps fails because you need dependecies, use apt-cache search to look for them according you php version. Then:
              sudo apt-get install [package-name]

_Installing TwitterOAuth

At the root's project run the followin command: 

composer require abraham/twitteroauth

_Installing SlimPHP

composer require slim/slim "^3.0"

_Installing PHPUnit

NOTE: this will install the PHPUnit for php 7.0, if you have another version please check it here https://phpunit.de/getting-started-with-phpunit.html.

composer require --dev phpunit/phpunit ^6 

--------------------------------------------------------------------------

to run the app, go to the app root app project and go to the src/public folder. Then run the following command:
php -S localhost:8000

then open browser and use this URL: http://localhost:8000/getT

--------------------------------------------------------------------------

to unitTest just go to the project's root and run:

./vendor/bin/phpunit unitTest/src/public/AivoTest.php
