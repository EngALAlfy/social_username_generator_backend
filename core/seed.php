<?php
require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/connect.php';

// Users
// $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
//
// $newUsername = 'admin';
// $newPassword = password_hash('123456', PASSWORD_DEFAULT);
//
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':username', $newUsername, PDO::PARAM_STR);
// $stmt->bindParam(':password', $newPassword, PDO::PARAM_STR);
//
// if ($stmt->execute()) {
//     echo "New user inserted successfully</br>";
// } else {
//     echo "Error inserting user: " . $stmt->errorInfo()[2];
// }
//
///// Settings
//$sql = "INSERT INTO settings (`key`, `value`) VALUES (:key, :value)";
//$key = "api_secret";
//$value = "secret_password";
//$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':key', $key, PDO::PARAM_STR);
//$stmt->bindParam(':value', $value, PDO::PARAM_STR);
//if ($stmt->execute()) {
//    echo "New settings [$key] inserted successfully</br>";
//} else {
//    echo "Error inserting settings: " . $stmt->errorInfo()[2];
//}
//
//$sql = "INSERT INTO settings (`key`, `value`) VALUES (:key, :value)";
//$key = "api_username";
//$value = "soical api username";
//$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':key', $key, PDO::PARAM_STR);
//$stmt->bindParam(':value', $value, PDO::PARAM_STR);
//if ($stmt->execute()) {
//    echo "New settings [$key] inserted successfully</br>";
//} else {
//    echo "Error inserting settings: " . $stmt->errorInfo()[2];
//}
//
//$sql = "INSERT INTO settings (`key`, `value`) VALUES (:key, :value)";
//$key = "api_password";
//$value = "soical api password";
//$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':key', $key, PDO::PARAM_STR);
//$stmt->bindParam(':value', $value, PDO::PARAM_STR);
//if ($stmt->execute()) {
//    echo "New settings [$key] inserted successfully</br>";
//} else {
//    echo "Error inserting settings: " . $stmt->errorInfo()[2];
//}

/// post
$sql = "INSERT INTO posts (`title`, `html` , `image`) VALUES (:title, :content , :image)";
$stmt = $pdo->prepare($sql);
$title = "test post";
$content = "post content";
$image = "post image";

$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':content', $content, PDO::PARAM_STR);
$stmt->bindParam(':image', $image, PDO::PARAM_STR);
if ($stmt->execute()) {
    echo "New post inserted successfully</br>";
} else {
    echo "Error inserting posts: " . $stmt->errorInfo()[2];
}
$pdo = null; // Close the connection
?>
