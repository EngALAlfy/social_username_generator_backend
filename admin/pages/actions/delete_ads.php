<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

$id = $_GET['id'];

if(!isset($id) || empty($id)) {
    header('Location: /admin/pages/ads/index.php?error=No ID');
    exit();
}

$stmt = $pdo->prepare("DELETE FROM ads WHERE id = ?");
$stmt->execute([$id]);

header('Location: /admin/pages/ads/index.php?success=Ad deleted successfully');
exit();

?>
