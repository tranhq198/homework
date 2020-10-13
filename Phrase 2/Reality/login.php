<?php session_start(); ?>
<link rel="stylesheet" href="style.css">
<div class="formLogin">
    <form action="" method="post">
        <h4>LOGIN</h4>
        <input type="text" placeholder="username" name="username" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>">
        <input type="password" placeholder="password" name="password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>">
        <button name="submit">Login</button>
        <input type="checkbox" name="savePass" value="<?php if(isset($_COOKIE['user'])) echo "checked"; ?>"><label for="">Save password</label>
        <a href="change-password.php">Change Password ?</a>
    </form>
</div>
<?php

$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'login';

$conn = mysqli_connect($server_host, $server_username, $server_password, $database) or die("không thể kết nối tới database");
mysqli_query($conn, "SET NAMES 'UTF8'");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (isset($_POST["savePass"])) {
        setcookie("user", "$username", time() + (86400*3), "/", "", 0, 0);
        setcookie("pass", "$password", time() + (86400*3), "/", "", 0, 0);
    }

    if ($username == "" || $password == "") { ?>
        <div class="notification"><?php echo "Vui lòng nhập đủ thông tin đăng nhập !" ?></div>
    <?php
    }else{
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = '$password'";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($query);
        if ($result==0) { ?>
            <div class="notification"><?php echo "Tên đăng nhập hoặc mật khẩu không đúng !" ?></div>
        <?php
        }else{
            $_SESSION['UserInfo'] = $username;
            header('Location: index.php');
        }
    }
}


