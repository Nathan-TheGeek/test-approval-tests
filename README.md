# Nathan's PHP Unit/Approval Tests Testing Project

## Pre-requisites
- Ensure that PHP is installed. 8.0 + recommended.
   - ```php -v``` should return a version number and not fail.
- Ensure that Composer is installed and working. 
   - ```composer --version``` should return a version number and not fail.
   - Composer can be installed assuming there is a php installation by following the steps on [their website](https://getcomposer.org/download/)

## Installation
1. ```git clone https://github.com/Nathan-TheGeek/test-approval-tests```
2. ```composer install```

## Running the Tests
- ### Simple Tests 
   - ```./vendor/bin/phpunit tests/SimpleTest.php``` will run some simple PHP Unit tests to ensure that php and PHP Unit is installed and working correctly. 
- ### Http Test against code on server.
   - ```./vendor/bin/phpunit tests/HttpTestAgainstServer.php``` will use an http client to call out to an external webserver and test the response returned.