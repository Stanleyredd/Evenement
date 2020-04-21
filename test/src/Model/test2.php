<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 20-4-2020
 * Time: 13:05
 */

function read($dbh){
    $sql = 'select * from account_has_functie as af INNER JOIN account on af.accountID =  account.accountID inner join functie as f on af.functieID = f.functieID;';

    return $dbh->query($sql);
}



