<?php
include '../config/db.php';

$sql = "SELECT * FROM CatBreeds WHERE is_visible=1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>ข้อมูลแมวยอดนิยม</title>
</head>
<body>
    <h1>แมวยอดนิยม</h1>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div>
            <h2><?= $row['name_th']; ?> (<?= $row['name_en']; ?>)</h2>
            <p><?= $row['description']; ?></p>
        </div>
    <?php } ?>
</body>
</html>
