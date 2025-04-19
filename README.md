# Prado PHP Framework - Minimal appliction project

PRADO is a component-based and event-driven programming framework for developing Web applications in PHP.
PRADO stands for PHP Rapid Application Development Object-oriented.

This repo contains a minimal application project for Prado4.

The best way to install the Prado4 basic application is [through composer](http://getcomposer.org).
If you don't use composer yet, first install it:
```sh
# download composer.phar
curl -s http://getcomposer.org/installer | php
# install it globally on the system
mv composer.phar /usr/local/bin/composer
```

Then, create the application structure using composer:
```sh
composer create-project pradosoft/prado-minapp app
```

The application will be installed in the "app" directory.

### Built-in PHP Test Web Server

The built-in PHP Test Web Server can be used to immediately start developing and testing a PRADO web application.
The web server is started with command (assuming the above application in the directory "app"):
```sh
cd app/protected
./vendor/bin/prado-cli http
```

The application is then accessible on the machine's browser at `http://127.0.0.1:8080/`.  The built-in web server is enabled when the application is in "Debug" mode or is enabled in the application configuration parameters.