<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 3-8-2019
 * Time: 22:31
 */

include "conn.php";

$voornaam = $_POST["voornaam"];
$evenementnaam = $_POST["evenementnaam"];
$datum = $_POST["datum"];
$begintijd = $_POST["begintijd"];
$eindtijd = $_POST["eindtijd"];
?>
<?php
        $DBConnect = new mysqli("localhost","root","","evenement");
    $sql2 = "select * from evenement where evenementnaam='$evenementnaam'";
    $result = $DBConnect->query($sql2);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
    }
    }else{
        $DBConnect->error;
    }
$DBConnect->close();
    ?>

<?php
$DBConnect2 = new mysqli("localhost","root","","evenement");

$sql3 = "select * from account where voornaam='$voornaam'";
$result = $DBConnect2->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $accountID = $row['accountID'];
    }
}else{
    $DBConnect2->error;
}
$DBConnect2->close();
?>

<?php



$sql = "INSERT INTO presentie (accountID, evenementID, datum, begintijd, eindtijd) VALUES ('$accountID', '$evenementID', '$datum', '$begintijd', '$eindtijd');";

if ($conn->query($sql) == true){
    echo "gelukt";
    header("location:../accounts.php");
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$sql. "<br>". $conn->error;
}



$conn->close();

?>