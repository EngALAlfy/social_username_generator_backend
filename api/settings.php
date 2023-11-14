<?php
require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../core/connect.php';

$stmt = $pdo->prepare("SELECT * FROM settings Where `key` != 'api_secret'");
$stmt->execute();
$settings = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convert the result to key-value pairs
$settingsResult = [];
foreach ($settings as $row) {
    $settingsResult[$row['key']] = $row['value'];
}

echo json_encode(["success" => true , "data" => $settingsResult] , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);