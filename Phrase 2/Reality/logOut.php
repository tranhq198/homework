<?php

session_start();

if(isset($_SESSION['UserInfo']) != NULL){
    setcookie("user", time() - (86400*3));
    setcookie("pass", time() - (86400*3));
    unset($_SESSION['UserInfo']);
    header('Location: index.php');
}
