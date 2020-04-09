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
    include"src/View/account/account_overview.php";
}

function login(){
    $title = "Inloggen";
    include("src/View/account/account_inlog_form.php");

}

function checklogin(){


}