<?php

if (!function_exists('abort')) {
function abort($httpStatusCode, $message = null) {
    http_response_code($httpStatusCode);

    if ($message !== null) {
        echo $message;
    }

    die();
}
}