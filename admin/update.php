<?php
require("../connect_db.php");
$id = (int) $_GET['id'];
$sql = "SELECT * FROM `product` WHERE `id` = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
$img = $row['imgUrl'];

if (isset($_POST["submit"])) {
    $heading = $_POST["title"];
    $hinhanh = $_FILES["imgUrl"]["name"];
    $target_dir = "./images/";
    if ($hinhanh) {
        if (file_exists("./images/".$img)) {
            unlink("./images/".$img);
        }
        $target_file = $target_dir.$hinhanh;
    }else{
        $target_file = $target_dir.$img;
        $hinhanh = $img;
    }

    if (isset($heading) && isset($hinhanh)) {
        move_uploaded_file($_FILES["imgUrl"]["tmp_name"],$target_file);
        // Update & Create: khác nhau câu lệnh SQL
        $sql = "UPDATE `product` SET `title` = '$heading', `imgUrl` = '$hinhanh'
        WHERE `product`.`id` = '$id'";
        mysqli_query($conn,$sql);
        header("Location:admin.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/Logo.png">
    <link rel="stylesheet" href="../assets/css/main_admin.css?v=<?php echo time(); ?>">
    <title>Sửa sản phẩm</title>
</head>
<body>
<div class="create">
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="heading_form">
                <a class="btn_nav" href="./admin.php">
                    <i class="fa-solid fa-backward icon_nav"></i>
                </a>
                <h1>Sửa bài viết</h1>
            </div>
            <div class="spacer"></div>
            <div class="form-group radio">
                <label class="form-label" for="title">Danh mục bài viết</label>
                <div class="form-control">
                    <input type="radio" id="commercial" name="title" value="commercial" checked>
                    <label for="commercial">commercial</label>
                </div>
                <div class="form-control">
                    <input type="radio" id="residential" name="title" value="residential">
                    <label for="residential">residential</label>
                </div>
                <div class="form-control">
                    <input  type="radio" id="furniture" name="title" value="furniture">
                    <label for="furniture">furniture</label>
                </div>
            </div>
            <div class="form-group">
                <img style="width:400px; height:400px" src="./images/<?= $row['imgUrl'] ?>" alt="">
            </div>    
            <div class="form-group">
                <label class="form-label" for="file">Hình ảnh sản phẩm</label>
                <input type="file" id="file" name="imgUrl" value="Chọn file">
            </div>
            <button class="form-submit" type="submit" name="submit">
                Lưu
            </button>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/0eca951f73.js" crossorigin="anonymous"></script>
</body>
</html>