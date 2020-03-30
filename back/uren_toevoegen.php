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
    $sql2 = "select * from evenement where evenementnaam='$evenementnaam'";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
    }
    }else{
    $conn->error;
    }
    $conn->close();
    ?>
<?php
$sql2 = "select * from evenement where evenementnaam='$evenementnaam'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
    }
}else{
    $conn->error;
}
$conn->close();
?>

<?php



$sql = "INSERT INTO presentie (accountID, evenementID, datum, begintijd, eindtijd) VALUES ('1', '$evenementID', '$datum', '$begintijd', '$eindtijd');";

if ($conn->query($sql) == true){
    echo "gelukt";
//    header("location:../zenders.php");
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$sql. "<br>". $conn->error;
}



$conn->close();

?>