<link rel="stylesheet" href="style.css">
<div class="changePass">
    <form action="" method="post">
        <h4>Change Password</h4>
        <input type="text" placeholder="username" name="username">
        <input type="text" name="phone" placeholder="number phone">
        <input type="text" placeholder="password" name="password">
        <input type="text" name="newPass" placeholder="change password">
        <button name="submit">Change</button>
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
    $phone = $_POST["phone"];
    $newPass = $_POST["newPass"];

    if ($username == "" || $password == "" || $newPass == "" || $phone == "") { ?>
        <div class="notification"><?php echo "Vui lòng nhập đủ thông tin!" ?></div>
        <?php
    }else{
        $sql = "UPDATE `users`  SET `password` = '$newPass' WHERE `username` = '$username' and `number_phone` = '$phone'";
        $query = mysqli_query($conn,$sql);
        header('Location: home.php');

    }
}
