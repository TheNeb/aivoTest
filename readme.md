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

Configuring the config.ini file:

at this point you have to fetch from your twitter account the consumer_key, consumer_secret, access_token and access_token_secret.
Remeber: do not use " ", just copy and paste each one without leaving any space. Example:  consumer_key=1xCJJeemZ9vNW7VgAVWcvDmM9

[twitter]
count=10
consumer_key =
consumer_secret=
access_token=
access_token_secret=


--------------------------------------------------------------------------

to run the app, go to the app root app project and go to the src/public folder. Then run the following command:
php -S localhost:8000

then open browser and use this URL: http://localhost:8000/getT

--------------------------------------------------------------------------

to unitTest just go to the project's root and run:

./vendor/bin/phpunit unitTest/src/public/AivoTest.php
