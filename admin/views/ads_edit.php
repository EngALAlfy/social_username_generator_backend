<?php
$id = $_GET['id'];

if (!isset($id) || empty($id)) {
    header('Location: /admin/pages/ads/index.php?error=No ID');
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM ads WHERE id = ?");
$stmt->execute([$id]);
$ad = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$ad) {
    header('Location: /admin/pages/ads/index.php?error=Ad not found');
    exit();
}
?>

<h1 style="font-size:30px;margin-bottom:20px">Edit Ad</h1>

<?php
if (isset($_GET["error"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET["error"]; ?>
    </div>
    <?php
}
?>

<form action="/admin/pages/actions/update_ads.php" method="post">

    <input type="hidden" name="id" value="<?php echo $ad['id']; ?>">

    <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo $ad['name']; ?>" required>
    </div>

    <div class="form-group">
        <label for="html">HTML *</label><br>
        <textarea id="html" name="html" rows="4" cols="50" class="form-control" required><?php echo $ad['html']; ?></textarea>
    </div>

    <input type="submit" class="btn btn-success" value="Save">
</form>
