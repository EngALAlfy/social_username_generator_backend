<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Add this line to get the ID of the ad

    // Check if both ID, name, and HTML are provided
    if (!isset($id, $_POST['password'], $_POST['confirm_password']) || empty($id) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        header('Location: /admin/pages/change_password.php?error=Missing ID, password, or confirm');
        exit();
    }

    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if both passwords are same
    if ($password != $confirm_password) {
        header('Location: /admin/pages/change_password.php?error=Passwords are not same');
        exit();
    }

    $newPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("UPDATE users SET `password` = ? WHERE id = ?");
    $stmt->execute([$newPassword, $id]);

    header('Location: /admin/pages/change_password.php?success=Password updated successfully');
    exit();
} else {
    header('Location: /admin/pages/change_password.php');
}
?>