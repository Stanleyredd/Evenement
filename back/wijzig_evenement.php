<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 5-8-2019
 * Time: 22:59
 */

include "conn.php";

$datum = $_POST['datum'];
$naam_evenement = $_POST['evenementnaam'];
$locatie = $_POST['locatie'];
$omschrijving = htmlspecialchars($_POST['omschrijving']);
$nieuwe_evenement_naam = $_POST['Nieuwe_evenement_naam'];

echo $datum."<br>";
echo $naam_evenement."<br>";
echo $nieuwe_evenement_naam."<br>";
echo $locatie."<br>";
echo $omschrijving."<br>";



$sql2 = "select *  from evenement where evenementnaam='$naam_evenement'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
        $omschrijving_data = $row['omschrijving'];
        $locatie_data = $row['locatie'];
    }
}else{
    $conn->error;
}
$conn->close();
?>

<?php
$DBConnect2 = new mysqli("localhost","root","","evenement");

if ($nieuwe_evenement_naam == ""){
    echo "er is niks ingevuld";
    $sql = "UPDATE evenement SET evenementnaam = '$naam_evenement', omschrijving= '$omschrijving' , locatie= '$locatie'  WHERE evenementID = '$evenementID';";
}elseif ($nieuwe_evenement_naam == ""){

}

else {
    $sql = "UPDATE evenement SET evenementnaam = '$nieuwe_evenement_naam', omschrijving= '$omschrijving' , locatie= '$locatie'  WHERE evenementID = '$evenementID';";
}

if ($DBConnect2->query($sql) == true){
    header("location:../index.php");

}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo $sql. "<br>". $DBConnect2->error;
}

$DBConnect2->close();







?>