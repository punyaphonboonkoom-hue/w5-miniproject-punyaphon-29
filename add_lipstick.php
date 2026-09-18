<?php

include("db.php");

if(isset($_POST['save']))
{
    $model_name = $_POST['model_name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    mysqli_query($conn,"
    INSERT INTO lipstick(model_name,price,image_url)
    VALUES('$model_name','$price','$image_url')
    ");

    header("Location: lipstick.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มลิปสติก</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#f5f5f5;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.container{
    width:500px;
    margin:60px auto;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

h1{
    text-align:center;
    margin-bottom:30px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:20px;
    border:1px solid #ddd;
    border-radius:10px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#ff69b4;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:#ff4fa3;
}

.site-footer {
    text-align: center;
    padding: 20px 0;
    color: #777;
    font-size: 14px;
    margin-top: auto;
}

.site-footer p {
    margin: 0;
}

</style>

</head>
<body>

<div class="container">

<h1>💄 เพิ่มลิปสติก</h1>

<form method="POST">

<label>ชื่อรุ่นลิปสติก</label>
<input type="text" name="model_name" required>

<label>ราคา</label>
<input type="number" name="price" required>

<label>ลิงก์รูปสินค้า</label>
<input type="text" name="image_url" placeholder="https://..." required>

<button type="submit" name="save">
บันทึก
</button>

</form>

</div>

<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Lipstick Store. All rights reserved.</p>
    </div>
</footer>

</body>
</html>