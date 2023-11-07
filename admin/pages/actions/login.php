<?php
require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';

session_start();
check_guest();

/// check method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /admin/pages/login.php');
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

if(!isset($username , $password)) {
    header('Location: /admin/pages/login.php?error=Username or password is empty');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Authentication successful
    session_start();
    $_SESSION['user_id'] = $user["id"];
    $_SESSION['username'] = $user["username"];
    header('Location: /admin/index.php');
    exit;
} else {
    // Authentication failed
    header('Location: /admin/pages/login.php?error=Username or password is not correct');
    exit;
}
