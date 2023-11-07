<?php

/// define the root path
define('ROOTPATH', __DIR__);

/// require composer autoload
require_once ROOTPATH . '/vendor/autoload.php';

/// add exception handle for whole project
function customExceptionHandler($exception) {
    // Handle the exception here
    echo "An error occurred";
    echo "</br>";
    echo $exception;
}

/// set the exception handle function
set_exception_handler('customExceptionHandler');
