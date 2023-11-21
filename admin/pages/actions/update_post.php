<?php

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['title'], $_POST['html']) ||  empty($_POST['title']) || empty($_POST['html'])) {
        header('Location: /admin/pages/post/index.php?error=Missing title or content');
        exit();
    }

    $title = $_POST['title'];
    $content = $_POST['html'];
    $image = null;

    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        if($_FILES["image"]["error"] > 0){
            header('Location: /admin/pages/post/index.php?error=File error :'.$_FILES["image"]["error"]);
            exit();
        }

        $targetDir = "../../../uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $image = basename($_FILES["image"]["name"]);
        } else {
            header('Location: /admin/pages/post/index.php?error=Sorry, there was an error uploading your file.');
            exit();
        }
    }

    $stmt = $pdo->prepare("UPDATE posts SET `title` = ?, `html` = ? " . ($image != null ? ", `image` = ?" : ""));
    $params = [$title, $content];

    // Add $image to the parameters array only if it is not null
    if ($image != null) {
        $params[] = $image;
    }

    $stmt->execute($params);

    header('Location: /admin/pages/post/index.php?success=Post updated successfully');
    exit();
} else {
    header('Location: /admin/pages/post/index.php');
}
?>