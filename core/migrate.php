<?php

require_once __DIR__ . '/connect.php';

/// Settings
$sql = "DROP TABLE IF EXISTS settings";
$pdo->exec($sql);
$sql = "CREATE TABLE settings (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `key` VARCHAR(255) NOT NULL UNIQUE,
    `value` TEXT NOT NULL,
    INDEX key_index (`key`),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Use exec() because no results are returned
$pdo->exec($sql);
echo "Table 'settings' created successfully</br>";

/// Ads
$sql = "DROP TABLE IF EXISTS ads";
$pdo->exec($sql);
$sql = "CREATE TABLE ads (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    html TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Use exec() because no results are returned
$pdo->exec($sql);
echo "Table 'ads' created successfully</br>";

$pdo = null; // Close the connection
?>