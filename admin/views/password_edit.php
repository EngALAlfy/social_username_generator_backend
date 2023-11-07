<?php
$id = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    header('Location: /admin/pages/change_password.php?error=User not found');
    exit();
}
?>

<h1 style="font-size:30px;margin-bottom:20px">Edit Password</h1>

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

<form action="/admin/pages/actions/update_password.php" method="post">

    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

    <div class="form-group">
        <label for="password">New Password *</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="confirm_password">Confirm New Password *</label>
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
    </div>

    <input type="submit" class="btn btn-success" value="Save">
</form>
