<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 5-8-2019
 * Time: 22:59
 */

include "db.php";

$accountID = $_POST["accountID"];
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];


echo $accountID."<br>";
echo $voornaam."<br>";
echo $tussenvoegsel."<br>";
echo $achternaam."<br>";
echo $adres."<br>";
echo $postcode."<br>";
echo $plaats."<br>";
echo $email."<br>";
echo $telefoon."<br>";



?>

<?php
$DBConnect2 = new mysqli("localhost","root","","winkel_examen");

    $sql = "UPDATE account SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', adres = '$adres', postcode = '$postcode', plaats = '$plaats', email = '$email', telefoon = '$telefoon' WHERE account.accountID = '$accountID'";


if ($DBConnect2->query($sql) == true){
//    header("location: ../../../index.php?controller=account&action=accountoverzicht");

}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo $sql. "<br>". $DBConnect2->error;
}

$DBConnect2->close();







?>