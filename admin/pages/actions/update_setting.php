<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Add this line to get the ID of the ad

    // Check if both ID, name, and HTML are provided
    if (!isset($id, $_POST['key'], $_POST['value']) || empty($id) || empty($_POST['key']) || empty($_POST['value'])) {
        header('Location: /admin/pages/settings/edit.php?id=' . $id . '&error=Missing ID, key, or value');
        exit();
    }

    $key = $_POST['key'];
    $value = $_POST['value'];

    $stmt = $pdo->prepare("UPDATE settings SET `key` = ?, `value` = ? WHERE id = ?");
    $stmt->execute([$key, $value, $id]);

    header('Location: /admin/pages/settings/index.php?success=Setting updated successfully');
    exit();
} else {
    abort(403);
}
?>
