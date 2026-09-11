<?php

include("db.php");

$id = $_GET['id'];

if(isset($_POST['update']))
{
    $model_name = $_POST['model_name'];
    $price = $_POST['price'];

    mysqli_query($conn,"UPDATE lipstick
    SET model_name='$model_name',
    price='$price'
    WHERE lipstick_id='$id'");

    header("Location: lipstick.php");
}

$result = mysqli_query($conn,"SELECT * FROM lipstick WHERE lipstick_id='$id'");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขลิปสติก</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#f5f5f5;
}

.container{
    width:500px;
    margin:60px auto;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

h1{
    text-align:center;
    color:#222;
    margin-bottom:30px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#444;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:20px;
    border:1px solid #ddd;
    border-radius:10px;
    box-sizing:border-box;
    font-size:15px;
}

input:focus{
    outline:none;
    border-color:#ff69b4;
}

button{
    width:100%;
    padding:14px;
    background:#ff69b4;
    color:white;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:#ff4fa3;
}

.back{
    display:block;
    text-align:center;
    margin-top:15px;
    text-decoration:none;
    color:#666;
}

</style>

</head>
<body>

<div class="container">

    <h1>💄 แก้ไขลิปสติก</h1>

    <form method="POST">

        <label>ชื่อรุ่นลิปสติก</label>

        <input type="text"
        name="model_name"
        value="<?php echo $row['model_name']; ?>"
        required>

        <label>ราคา</label>

        <input type="number"
        name="price"
        value="<?php echo $row['price']; ?>"
        required>

        <button name="update">
            บันทึกการแก้ไข
        </button>

    </form>

    <a href="lipstick.php" class="back">
        ← กลับหน้าจัดการลิปสติก
    </a>

</div>

</body>
</html>