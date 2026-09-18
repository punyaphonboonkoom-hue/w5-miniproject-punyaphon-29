<?php
include("db.php");
$id = $_GET['id'];

if(isset($_POST['update'])) {
    $shade_name = $_POST['shade_name'];
    mysqli_query($conn, "UPDATE lipstick_shades SET shade_name='$shade_name' WHERE shade_id='$id'");
    header("Location: shades.php");
}

$result = mysqli_query($conn, "SELECT * FROM lipstick_shades WHERE shade_id='$id'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>แก้ไขเฉดสี</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>แก้ไขเฉดสี</h1>
        <form method="POST">
            <label>ชื่อเฉดสี</label>
            <input type="text" name="shade_name" value="<?php echo $row['shade_name']; ?>" required>
            <button name="update">บันทึก</button>
        </form>
        <a href="shades.php" class="back">← กลับหน้าจัดการเฉดสี</a>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> Lipstick Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>