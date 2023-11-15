<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customWord = isset($_POST['custom_word']) ? $_POST['custom_word'] : '';
    $length = isset($_POST['length']) ? (int)$_POST['length'] : 8; // Default length is 8
    $useSymbols = isset($_POST['symbols']);
    $useNumbers = isset($_POST['numbers']);
    $service = isset($_POST['service']) ? $_POST['service'] : '';

    $result = generateRandomStrings($length, $useSymbols, $useNumbers, $customWord);

    include "./front/includes/result-page.php";
} else {
    header('Location: ./index.php');
    exit();
}

function generateRandomStrings($length, $useSymbols, $useNumbers, $customWord = '', $count = 5) {
    $randomStrings = [];

    for ($i = 0; $i < $count; $i++) {
        $randomStrings[] = generateRandomString($length, $useSymbols, $useNumbers, $customWord);
    }

    return $randomStrings;
}
function generateRandomString($length, $useSymbols, $useNumbers, $customWord = '')
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $symbols = '_.';

    $randomString = '';

    if ($useSymbols) {
        $length = $length - 1;
    }

    if ($useNumbers) {
        $length = $length - 2;
    }

    if($length < strlen($customWord)){
        header('Location: ./index.php?error=اختر طول لليوزر اكبر');
    }

    if ($customWord !== '') {
        $length = $length - strlen($customWord);
        $randomString .= $customWord;
    }

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, strlen($characters) - 1)];
    }

    if ($useSymbols) {
        $randomString .= $symbols[random_int(0, strlen($symbols) - 1)];
    }

    if ($useNumbers) {
        $randomString .= random_int(10, 99);
    }

    return $randomString;
}