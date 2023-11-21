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
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../../favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .file-input-wrapper input[type="file"] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .file-input-wrapper .btn-upload {
            border: 2px dashed #ccc;
            color: #333;
            background-color: #fff;
            padding: 12px 54px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
            cursor: pointer;
            text-align: center;
        }

        .file-input-wrapper .file-name {
            margin-left: 10px;
        }

        label {
            font-weight: bolder;
        }
    </style>
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

            <div class="col"  style="margin-left:20%;margin-top:70px;">

                <?php
                // ads list view code
                require_once __DIR__ . '/../../views/post_edit.php';
                ?>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote(
                {
                    placeholder: 'Enter post content',
                    height: 200
                }
            );
        });
    </script>

    <script>
        const fileInput = document.getElementById('image');
        const fileNameDisplay = document.querySelector('.file-name');

        fileInput.addEventListener('change', function() {
            fileNameDisplay.textContent = this.value.split('\\').pop();
            $("#image").removeClass("border-danger");
            $("#image-error-message").remove();
        });
    </script>
</body>

</html>