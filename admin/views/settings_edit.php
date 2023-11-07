<?php
$id = $_GET['id'];

if (!isset($id) || empty($id)) {
    header('Location: /admin/pages/settings/index.php?error=No ID');
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM settings WHERE id = ?");
$stmt->execute([$id]);
$setting = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$setting) {
    header('Location: /admin/pages/settings/index.php?error=Setting not found');
    exit();
}
?>

<h1 style="font-size:30px;margin-bottom:20px">Edit Setting</h1>

<?php
if (isset($_GET["error"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET["error"]; ?>
    </div>
    <?php
}
?>

<form action="/admin/pages/actions/update_setting.php" method="post">

    <input type="hidden" name="id" value="<?php echo $setting['id']; ?>">

    <div class="form-group">
        <label for="key">Key *</label>
        <input type="text" id="key" name="key" class="form-control" value="<?php echo $setting['key']; ?>" required>
    </div>

    <div class="form-group">
        <label for="value">Value *</label><br>
        <textarea id="value" name="value" rows="4" cols="50" class="form-control" required><?php echo $setting['value']; ?></textarea>
    </div>

    <input type="submit" class="btn btn-success" value="Save">
</form>
