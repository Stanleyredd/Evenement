<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 14:42
 */
session_start();
include("config/config.php");
include("src/Lib/db.php");

//echo password_hash('tet', PASSWORD_DEFAULT);


if (!isset($_GET['controller']) || $_GET['controller'] == 'home') {
    include "src/Controller/HomeController.php";
}elseif ($_GET['controller'] == 'winkel'){
    include "src/Model/winkel.php";
    include "src/Controller/WinkelController.php";
}elseif ($_GET['controller'] == 'account'){
    include "src/Model/account.php";
    include "src/Controller/AccountController.php";
    if (!isset($_GET['action']) || $_GET['action'] == 'index') {
        index($dbh);
    }elseif($_GET['action'] == "register"){
register();
    }elseif($_GET['action'] == "login"){
        login();
    }elseif($_GET['action'] == "checklogin"){
        checklogin($dbh);
    }elseif ($_GET['action'] == "uitloggen"){
        uitloggen();
    }
}else {
    include "src/View/404.php";
}



