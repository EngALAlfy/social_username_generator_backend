<h1 style="font-size:30px;margin-bottom:20px">Add New Ad</h1>

<?php
if (isset($_GET["error"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET["error"]; ?>
    </div>
    <?php
}
?>

<form action="/admin/pages/actions/add_ads.php" method="post">

    <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="html">HTML *</label><br>
        <textarea id="html" name="html" rows="4" cols="50" class="form-control" required></textarea>
    </div>

    <input type="submit" class="btn btn-success" value="Save">
</form>