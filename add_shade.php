<?php

include("db.php");

if(isset($_POST['save']))
{
    $shade_name = $_POST['shade_name'];
    $lipstick_id = $_POST['lipstick_id'];

    mysqli_query($conn,
    "INSERT INTO lipstick_shades(shade_name,lipstick_id)
    VALUES('$shade_name','$lipstick_id')");

    header("Location: shades.php");
}

$lipstick = mysqli_query($conn,
"SELECT * FROM lipstick");

?>

<!DOCTYPE html>
<html>
<head>
<title>เพิ่มเฉดสี</title>

<style>

body{
    font-family:'Segoe UI',sans-serif;
    background:#f8f8f8;
}

.container{
    width:500px;
    margin:50px auto;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h1{
    text-align:center;
}

input,select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:10px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
    background:#ff69b4;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
}

</style>

</head>
<body>

<div class="container">

<h1>🎨 เพิ่มเฉดสี</h1>

<form method="POST">

ชื่อเฉดสี

<input type="text"
name="shade_name"
required>

เลือกลิปสติก

<select name="lipstick_id">

<?php while($row=mysqli_fetch_assoc($lipstick)){ ?>

<option value="<?php echo $row['lipstick_id']; ?>">

<?php echo $row['model_name']; ?>

</option>

<?php } ?>

</select>

<button name="save">
บันทึก
</button>

</form>

</div>

</body>
</html>