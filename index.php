<?php
// include composer autoloader
require 'protected/vendor/autoload.php';
// create a PRADO application instance
$application = new \Prado\TApplication;
// run the application and handle user requests
$application->run();