<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 31-3-2020
 * Time: 00:00
 */
include "conn.php";

$accountID = $_GET['accountID'];
$evenementID = $_GET['evenementID'];
$datum = $_GET['datum'];

echo $accountID."<br>";
echo $evenementID;


$sql = "DELETE FROM presentie WHERE presentie.accountID = '$accountID' AND presentie.evenementID = '$evenementID' AND presentie.datum = '$datum'";

if ($conn->query($sql) == true){
    header("location:../accounts.php");


}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo $sql. "<br>". $conn->error;
}

$conn->close();
