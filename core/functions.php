<?php

if (!function_exists('abort')) {
    function abort($httpStatusCode, $message = null)
    {
        http_response_code($httpStatusCode);

        if ($message !== null) {
            echo $message;
        }

        die();
    }
}

if (!function_exists('check_user')) {
    function check_user()
    {
        // check user logged in
        if (!isset($_SESSION['user_id'])) {
            // redirect to login page
            header("Location: /admin/pages/login.php");
            exit();
        }
    }
}

if (!function_exists('check_guest')) {
    function check_guest()
    {
        // check user logged in
        if (isset($_SESSION['user_id'])) {
            // redirect to index page
            header("Location: /admin/index.php");
            exit();
        }
    }
}