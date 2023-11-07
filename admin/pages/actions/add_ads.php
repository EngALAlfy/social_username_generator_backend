<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $html = $_POST['html'];

    if(!isset($name , $html) || empty($name) || empty($html)) {
        header('Location: /admin/pages/ads/add.php?error=No name or html');
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO ads (name, html, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$name, $html]);

    header('Location: /admin/pages/ads/index.php?success=Ads added successfully');
    exit();
}else{
    header('Location: /admin/pages/ads/add.php');
}
?>
