<?php
$isLogin = false;
if(isset($_POST['login'])) {
    if ($_POST['account'] == 'admin' && $_POST['password'] == 'admin') {
        // header("location:admin.php");
        return 
            $isLogin = true; 
            echo ($isLogin);
        
    }else{
        echo"<script>alert('Username or Password is incorrect')</script>";
        return $isLogin = false; 
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
    <link rel="stylesheet" href="../assets/css/login_admin.css?v=<?php echo time(); ?>">
    <title>Login Da Vàng</title>
</head>
<body>
    <div class="main">
        <form action="" method="POST" class="form" id="form-1" enctype="multipart/form-data">
            <h3 class="heading">Welcome Admin</h3>
            <p class="desc">Design & Build</p>
            <div class="spacer"></div>
            <div class="form-group">
                <label for="account" class="form-label">Account</label>
                <input id="fullname" name="account" type="text" placeholder="admin..." class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" placeholder="password..." class="form-control" required>
            </div>
            <p class="copyright">Copyright © 2022 - Toàn Thắng</p>
            <button class="form-submit" type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>