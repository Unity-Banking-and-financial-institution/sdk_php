# bunq PHP SDK tests :mag:

## Introduction
Hi developers!

Welcome to the bunq PHP SDK integration tests. Currently we are not targeting the 100% test coverage, but rather want to be certain that the most common scenarios can run without any errors.

## Setup
First create a certificate and key using this command
```
openssl req -x509 -newkey rsa:4096 -keyout tests/resource/key.pem -out tests/resource/certificate.cert -days 365 -nodes -subj '/CN=yghbjsdayugasdyug/C=NL'
```

## Execution
You can run the tests  via command line:
```
vendor/phpunit/phpunit/phpunit
```
or via PhpStorm, but first you must configure PhpStorm by doing the following:
* Got to preferences --> Language and Frameworks --> Php --> Test Frameworks and add
`sdk_php/vendor/autoload.php` as path to script with `use composer autoloader` checked.

Afterwards you can right click on the tests folders and should be able to run
the tests cases form the IDE.
