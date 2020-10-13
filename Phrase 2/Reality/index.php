<?php
session_start();
if (!isset($_SESSION['UserInfo'])) {
    header('Location: login.php');
}
?>
<?php echo " Xin chào bạn đã đăng nhập thành công"."<br>" ?>
<a href="logOut.php">Log Out</a>
