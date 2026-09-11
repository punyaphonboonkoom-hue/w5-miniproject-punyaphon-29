<?php
include("db.php");

$sql = "SELECT lipstick_shades.*, lipstick.model_name
        FROM lipstick_shades
        LEFT JOIN lipstick
        ON lipstick_shades.lipstick_id = lipstick.lipstick_id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>จัดการเฉดสี - DIOR BEAUTY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="top-nav">
        <a href="dashboard.php" class="back-btn">← กลับ Dashboard</a>
    </div>

    <h1 class="title">🎨 จัดการเฉดสี</h1>

    <div class="action-bar">
        <a href="add_shade.php" class="add-btn">+ เพิ่มเฉดสี</a>
    </div>

    <table class="dior-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อเฉดสี</th>
                <th>ลิปสติก</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td class="shade-id"><?php echo $row['shade_id']; ?></td>
                <td class="shade-name"><?php echo $row['shade_name']; ?></td>
                <td class="lipstick-name"><?php echo $row['model_name']; ?></td>
                <td class="action-cell">
                    <a class="edit-btn" href="edit_shade.php?id=<?php echo $row['shade_id']; ?>">แก้ไข</a>
                    <a class="delete-btn" href="delete_shade.php?id=<?php echo $row['shade_id']; ?>">ลบ</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

</body>
</html>