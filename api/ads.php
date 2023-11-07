<?php
require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../core/connect.php';

$stmt = $pdo->prepare("SELECT * FROM ads");
$stmt->execute();
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(["success" => true , "data" => $ads] , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);