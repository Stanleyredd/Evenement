<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 12:40
 */

$sql = "Select * from evenement";
foreach ($dbh->query($sql) as $evenement){
    echo $evenement['evenementnaam'];
    echo $evenement['evenementID'];
}