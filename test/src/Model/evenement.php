<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 14:56
 */


function read($dbh){
    $sql = "Select * from evenement";
    return $dbh->query($sql);

}

