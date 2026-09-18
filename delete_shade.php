<?php

include("db.php");

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM lipstick_shades
WHERE shade_id='$id'");

header("Location: shades.php");


?>


