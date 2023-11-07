<?php 
require_once __DIR__ . '/../bootstrap.php';

session_start();
check_user();


// redirect to pages/ads
header('Location: /admin/pages/ads/index.php');
exit();