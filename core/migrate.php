<?php
require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/connect.php';

/// Users
$sql = "DROP TABLE IF EXISTS users";
$pdo->exec($sql);
$sql = "CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Use exec() because no results are returned
$pdo->exec($sql);
echo "Table 'users' created successfully</br>";

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