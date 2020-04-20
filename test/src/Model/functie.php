<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 17-4-2020
 * Time: 11:41
 */

function read($dbh){
    $sql = "Select * from functie";
    return $dbh->query($sql);

}
