<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 15:01
 */


$evenementen = read($dbh);
include"src/View/evenement/evenement_overview.php";