<?php
// Prepare and execute a query to fetch ads
$stmt = $pdo->prepare("SELECT * FROM settings");
$stmt->execute();
$settings = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

<!-- Title -->
<h2 style="font-size:30px;margin-bottom:20px;">Settings list</h2>
<!-- Display the ads in an HTML table -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Key</th>
            <th>Value</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($settings) <= 0) { ?>
            <tr>
                <td colspan=4 class="text-center">No data found</td>
            </tr>
        <?php } ?>
        <?php foreach ($settings as $setting) : ?>
            <tr>
                <td><?php echo $setting['id']; ?></td>
                <td><span class="badge badge-success"><?php echo $setting['key']; ?></span></td>
                <td><?php echo htmlspecialchars($setting['value']); ?></td>
                <td>
                    <a href="/admin/pages/settings/update.php?id=<?php echo $setting['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
