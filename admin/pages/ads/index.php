<?php
require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../../../core/connect.php';
session_start();
check_user();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <!-- Header -->
    <?php
    require_once __DIR__ . '/../../includes/header.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once __DIR__ . '/../../includes/sidebar.php';
            ?>

            <div class="col" style="margin-left:20%;margin-top:50px;">

                <?php
                // ads list view code
                require_once __DIR__ . '/../../views/ads_list.php';
                ?>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>