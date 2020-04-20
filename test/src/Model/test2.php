<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 20-4-2020
 * Time: 13:05
 */

function read($dbh){
    $sql = 'SELECT * from contact';

    return $dbh->query($sql);
}



