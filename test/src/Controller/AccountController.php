<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 16:38
 */



function index($dbh){
    $accounts = read($dbh);
    $title = "Accounts";
//    var_dump($_SESSION['account']);
    include"src/View/account/account_overview.php";
}

function login(){
    $title = "Inloggen";
    include("src/View/account/account_inlog_form.php");

}

function checklogin($dbh){
   $account = readByLogin($dbh, $_POST['emailaddress']);
   if (password_verify($_POST['emailpassword'], $account['password'])){
       $_SESSION['account'] = $account['voornaam']."  ".$account['tussenvoegsel']."  ".$account['achternaam'];
       index($dbh);
   }else{
       login();
   };
}

function uitloggen(){
    $_SESSION['account'] = [];
    unset($_SESSION['account']);
    login();
}

function register(){
    $title = "Register";
    include("src/View/account/register.php");

}