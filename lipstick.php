<?php

include("db.php");

$sql = "SELECT * FROM lipstick";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>จัดการลิปสติก</title>
    <link rel="stylesheet" href="style.css">

    
  

</head>
<body>

<div class="container">

    <a href="dashboard.php" class="back-btn">← กลับ Dashboard</a>

    <h1 class="title">💄 จัดการลิปสติก</h1>

    <a href="add_lipstick.php" class="add-btn">
        + เพิ่มลิปสติก
    </a>

    <div class="card-container">

        <?php while($row=mysqli_fetch_assoc($result)){ ?>

        <div class="card">

            <img src="<?php echo $row['image_url']; ?>">

            <h3><?php echo $row['model_name']; ?></h3>

            <p class="price">
                ฿<?php echo number_format($row['price'],2); ?>
            </p>

            <div class="action">

                <a class="edit"
                href="edit_lipstick.php?id=<?php echo $row['lipstick_id']; ?>">
                แก้ไข
                </a>

                <a class="delete"
                href="delete_lipstick.php?id=<?php echo $row['lipstick_id']; ?>">
                ลบ
                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>