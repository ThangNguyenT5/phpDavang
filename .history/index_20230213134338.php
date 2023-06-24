<?php
    require("./connect_db.php");
    $title_commercial = 'commercial';
    $title_residential = 'residential';
    $title_furniture = 'furniture';
    $sql = "SELECT * FROM `product` WHERE `title` = '$title_commercial' ";
    $sql_res = "SELECT * FROM `product` WHERE `title` = '$title_residential' ";
    $sql_fu = "SELECT * FROM `product` WHERE `title` = '$title_furniture' ";
    $query = mysqli_query($conn,$sql);
    $query_res = mysqli_query($conn,$sql_res);
    $query_fu = mysqli_query($conn,$sql_fu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Da Vàng</title>
    <link rel="icon" href="./assets/img/Logo.png">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid-ns.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>
    <div class="main">
        <!-- Header -->
        <div class="header">
            <div class="grid wide">
                <div class="row header__navbar no-gutters">
                    <div class="header__logo">
                        <a href="#" class="header__logo-link">
                            <img src="./assets/img/logo_text.png" alt="" class="header__logo-img">
                        </a>
                    </div>
                    <!-- Navbar PC -->
                    <label for="navbar-mobile--checkbox" class="header__navbar-mobile">
                        <i class="header__navbar-mobile--icon fa-solid fa-bars"></i>
                    </label>
                    <input type="checkbox" hidden id="navbar-mobile--checkbox" class="header__navbar-mobile--checkbox">
                    <label for="navbar-mobile--checkbox" class="header__modal-navbar"></label>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <label for="navbar-mobile--checkbox" class="header__navbar-mobile">
                                <i class="header__navbar-mobile--icon fa-solid fa-bars"></i>
                            </label>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#commercial" class="header__navbar-item--link">Commercial</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#residential" class="header__navbar-item--link">Residential</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#furniture" class="header__navbar-item--link">Furniture</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="./admin/login.php" class="header__navbar-item--link">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <!-- Slider -->
            <div class="slider_main">
                <div class="slider_item">
                    <img src="./assets/img/background_home.jpg" alt="background">
                </div>
                <div class="slider_item">
                    <img src="./assets/img/background_home 2.jpg" alt="background">
                </div>
                <div class="slider_item">
                    <img src="./assets/img/background_home 3.jpg" alt="background">
                </div>
            </div>
            <!-- About -->
            <div class="grid">
                    <div id="about" class="content__about row">
                        <div class="content__about-img col l-6 m-6 c-12" style="background-image: url(./assets/img/img_about.jpg);">
                        </div>
                        <div class="content__about-header col l-6 m-6 c-12">
                            <h1 class="content__about--heading">WHAT WE DO</h1>
                            <p class="content__about--text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br>
                                <br>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                    </div>
            </div>
            <!-- Home Product -->
            <div id="commercial" class="grid wide">
                <!-- Service -->
                <div class="content__service-header col">
                    <h1 class="content__service--heading">COMMERCIAL</h1>
                    <span class="content__servide--sub-heading">SERVICE</span>
                </div>
                <!-- Product -->
                <div class="content__service-project row">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col l-3 m-4 c-6">
                                    <a href="" class="content__service-item">
                                    <div class="content__service-item--img" style="background-image: url(./admin/images/<?= $row['imgUrl'] ?>);"></div>
                                </a>
                            </div>
                    <?php } ?>
                </div>
            </div>
            <div id="residential" class="grid wide">
                <!-- Service -->
                <div class="content__service-header col">
                    <h1 class="content__service--heading">RESIDENTIAL</h1>
                    <span class="content__servide--sub-heading">SERVICE</span>
                </div>
                <!-- Product -->
                <div class="content__service-project row">
                    <?php
                        while ($row = mysqli_fetch_array($query_res)) {
                        ?>
                        <div class="col l-3 m-4 c-6">
                                        <a href="" class="content__service-item">
                                        <div class="content__service-item--img" style="background-image: url(./admin/images/<?= $row['imgUrl'] ?>);"></div>
                                    </a>
                                </div>
                    <?php } ?>
            </div>
            <div id="furniture" class="grid wide">
                <!-- Service -->
                <div class="content__service-header col">
                    <h1 class="content__service--heading">FURNITURE</h1>
                    <span class="content__servide--sub-heading">SERVICE</span>
                </div>
                <!-- Product -->
                <div class="content__service-project row">
                    <?php
                        while ($row = mysqli_fetch_array($query_fu)) {
                        ?>
                        <div class="col l-12 m-12 c-12">
                                        <a href="" class="content__service-item">
                                        <div class="content__service-item--img" style="background-image: url(./admin/images/<?= $row['imgUrl'] ?>);"></div>
                                    </a>
                                </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer grid">
            <div class="footer row">
                <div class="col l-3 m-6 c-6">
                    <div class="footer__contact">
                        <h1 class="footer__contact-heading">Contact</h1>
                        <ul class="footer__contact-list">
                            <li class="footer__contact-item">
                                <p class="footer__contact-text">
                                    <i class="footer__contact-icon fa-solid fa-square-phone"></i>
                                    090.680.0005 - 098.993.9083
                                </p>
                            </li>
                            <li class="footer__contact-item">
                                <p class="footer__contact-text">
                                    <i class="footer__contact-icon fa-solid fa-map-location-dot"></i>
                                    72/8 Duong so 15, Binh Hung Hoa, Binh Tan, Thanh pho Ho Chi Minh
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col l-3 m-6 c-6">
                    <div class="footer__follow">
                        <h1 class="footer__follow-heading">Follow Us</h1>
                        <ul class="footer__follow-list">
                            <li class="footer__follow-item">
                                <a href="https://www.facebook.com/davangstudio" class="footer__follow-link">
                                    <i class="footer__follow-icon fa-brands fa-facebook-square"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer__follow-item">
                                <a href="https://www.instagram.com/davang.com.vn" class="footer__follow-link">
                                    <i class="footer__follow-icon fa-brands fa-instagram-square"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer__follow-item">
                                <a href="https://www.behance.net/keinguyen5691" class="footer__follow-link">
                                    <i class="footer__follow-icon fa-brands fa-behance-square"></i>
                                    Behance
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col l-6 m-12 c-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1269469559106!2d106.60554891528407!3d10.801587961681218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bbaaee4263f%3A0xc0714c99622bdcc0!2sda%20v%C3%A0ng%20studio!5e0!3m2!1svi!2s!4v1652198080525!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="footer__map"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="./app.js"></script>
    <script src="https://kit.fontawesome.com/0eca951f73.js" crossorigin="anonymous"></script>
</body>
</html>