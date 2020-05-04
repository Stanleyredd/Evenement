<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 14:56
 */


function read($dbh){
    $sql = "Select * from account";
    return $dbh->query($sql);

}

function readByLogin($dbh, $email){
    $stmt = $dbh->prepare("Select * from account where email=:email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch();
}