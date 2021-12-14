<?php

require "../vendor/autoload.php";

$greeting = new App\Wcs\Hello;

echo 'Greetings! ' .$greeting->talk();
