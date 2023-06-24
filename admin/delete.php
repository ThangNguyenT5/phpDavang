<?php
require("../connect_db.php");
$id = (int) $_GET['id'];
$image = "SELECT * FROM `product` WHERE `product`.`id` = $id";
$query = mysqli_query($conn,$image);
$after = mysqli_fetch_assoc($query);

// DEL IMG
if (file_exists("./images/".$after['imgUrl'])) {
    unlink("./images/".$after['imgUrl']);
}

$sql = "DELETE FROM `product` WHERE `product`.`id` = $id";
mysqli_query($conn,$sql);
header("Location:admin.php");
?>