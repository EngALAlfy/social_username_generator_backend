<?php
$stmt = $pdo->prepare("SELECT * FROM posts LIMIT 1");
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1 style="font-size:30px;margin-bottom:20px">Edit Page Post</h1>

<?php
if (isset($_GET["error"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET["error"]; ?>
    </div>
    <?php
}
?>

<?php
if (isset($_GET["success"])) {
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET["success"]; ?>
    </div>
    <?php
}
?>

<form action="/admin/pages/actions/update_post.php" method="post"  enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Title *</label>
        <input type="text" id="title" name="title" class="form-control" value="<?php echo $post["title"]; ?>" required>
    </div>


    <div class="form-group">
        <label for="summernote">Content *</label>
        <textarea id="summernote" name="html"><?php echo $post["html"]; ?></textarea>
    </div>

    <div class="form-group mt-4">
        <label for="file">Image *</label>
        <br>
        <div class="file-input-wrapper">
            <button class="btn-upload">Upload File</button>
            <span class="file-name"></span>
            <input type="file" name="image" id="image" class="file-input">
        </div>

        <?php if(isset($post["image"])){?>
            <br>
            <img src="/uploads/<?php echo $post["image"]; ?>" class="img-fluid img-thumbnail my-4" width="205">
        <?php } ?>
    </div>

    <button type="submit" class="btn btn-success btn-lg mb-5 bt-4"
            style="padding-left: 100px;padding-right: 100px">
        <i class="fa fa-save mr-2"></i>Save
    </button>

</form>
