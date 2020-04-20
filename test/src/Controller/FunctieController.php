<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 17-4-2020
 * Time: 11:47
 */


$functies = read($dbh);
$title = "Functies";

include"src/View/functie/functie_overview.php";