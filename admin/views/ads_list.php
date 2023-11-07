<?php
// Prepare and execute a query to fetch ads
$stmt = $pdo->prepare("SELECT * FROM ads");
$stmt->execute();
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<h2 style="font-size:30px;margin-bottom:20px;">Advertisements list</h2>
<!-- Display the ads in an HTML table -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>HTML</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($ads) <= 0) { ?>
            <tr>
                <td colspan=5 class="text-center">No data found</td>
            </tr>
        <?php } ?>
        <?php foreach ($ads as $ad) : ?>
            <tr>
                <td><?php echo $ad['id']; ?></td>
                <td><?php echo $ad['name']; ?></td>
                <td><?php echo htmlspecialchars($ad['html']); ?></td>
                <td><?php echo $ad['created_at']; ?></td>
                <td>
                    <a href="/admin/pages/ads/update.php?id=<?php echo $ad['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="/admin/pages/actions/delete_ads.php?id=<?php echo $ad['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
