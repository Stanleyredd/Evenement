<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 5-8-2019
 * Time: 23:15
 */

include "conn.php";

$evenementnaam = $_POST["evenementnaam"];


echo $evenementnaam."<br>";





$sql = "delete from evenement where evenementnaam='$evenementnaam';";

if ($conn->query($sql) == true){
    header("location:../index.php");


}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo $sql. "<br>". $conn->error;
}

$conn->close();