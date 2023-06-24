<?php
    require("../connect_db.php");
    $sql = "SELECT * FROM `product`";
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/Logo.png">
    <link rel="stylesheet" href="../assets/css/base.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/main_admin.css?v=<?php echo time(); ?>">
    <title>Admin Da Vàng</title>
</head>
<body>
    <div class="admin">
        <div class="heading_admin_form">
            <a class="btn_nav" href="../index.php">
                <i class="fa-solid fa-house-user icon-home"></i>
                Logout
            </a>
            <a class="heading_nav" href="#">Quản lý bài viết</a>
            <a class="btn_nav" href="./create.php">
                Thêm bài viết
                <i class="fa-solid fa-circle-plus icon-color"></i>
            </a>
        </div>
        <table id="productList">
            <tr>
                <th>ID</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td> 
                <td><?= $row['title'] ?></td>
                <td>
                    <img style="width: 200px; height: 200px" src="./images/<?= $row['imgUrl'] ?>" alt="">
                </td>
                <td>
                    <a class="btn_control" href="update.php?id=<?= $row['id'] ?> ">
                        <i class="fa-solid fa-pen-to-square icon_edit"></i>
                    </a>
                    <a class="btn_control" href="delete.php?id=<?= $row['id'] ?>"
                        onclick="return delPost()">
                        <i class="fa-solid fa-trash icon_trash"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
<script src="https://kit.fontawesome.com/0eca951f73.js" crossorigin="anonymous"></script>
<script>
    function delPost() {
        var conf = confirm(`Xóa thiệt khum ?`);
        return conf;
    }
</script>
</html>