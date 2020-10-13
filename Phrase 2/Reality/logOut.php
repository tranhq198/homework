<?php

session_start();

if(isset($_SESSION['UserInfo']) != NULL){

    unset($_SESSION['UserInfo']);
    header('Location: index.php');
}
