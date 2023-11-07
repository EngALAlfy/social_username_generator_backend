<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Add this line to get the ID of the ad

    // Check if both ID, name, and HTML are provided
    if (!isset($id, $_POST['name'], $_POST['html']) || empty($id) || empty($_POST['name']) || empty($_POST['html'])) {
        header('Location: /admin/pages/ads/edit.php?id=' . $id . '&error=Missing ID, name, or html');
        exit();
    }

    $name = $_POST['name'];
    $html = $_POST['html'];

    $stmt = $pdo->prepare("UPDATE ads SET name = ?, html = ? WHERE id = ?");
    $stmt->execute([$name, $html, $id]);

    header('Location: /admin/pages/ads/index.php?success=Ad updated successfully');
    exit();
} else {
    abort(403);
}
?>
