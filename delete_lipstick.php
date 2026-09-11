<?php
include("db.php");

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM lipstick_shades
WHERE lipstick_id='$id'");

mysqli_query($conn,
"DELETE FROM lipstick
WHERE lipstick_id='$id'");

header("Location: lipstick.php");
?>