<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 30-3-2020
 * Time: 11:39
 */
include_once "conn.php";


$datum = $_POST['datum'];
$naam_evenement = $_POST['naam_evenement'];
$locatie = $_POST['locatie'];
$barkeepers = $_POST['barkeepers'];
$gastheren_vrouwen = $_POST['gastheren_vrouwen'];
$obers = $_POST['obers'];
$omschrijving = $_POST['omschrijving'];



$conn->close();
?>
<?php



//echo "INSERT INTO `functie_has_evenement` (`functieID`, `evenementID`, `aantal`) VALUES ('2', '3', '5')";


$DBConnect = new mysqli("localhost","root","","evenement");

$sql = "INSERT INTO evenement (evenementID, evenementnaam, omschrijving, locatie) VALUES (NULL, '$naam_evenement', '$omschrijving', '$locatie')";

if ($DBConnect->query($sql) == true){
    echo "gelukt";
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$sql. "<br>". $DBConnect->error;
}



$DBConnect->close();

?>

<?php
$DBConnect5 = new mysqli("localhost","root","","evenement");

$sql2 = "select *  from evenement where evenementnaam='$naam_evenement'";
$result = $DBConnect5->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
    }
}else{
    $DBConnect5->error;
}


$barkeepers = $_POST['barkeepers'];
$gastheren_vrouwen = $_POST['gastheren_vrouwen'];
$obers = $_POST['obers'];

$DBConnect2 = new mysqli("localhost","root","","evenement");
$sql_ober = "INSERT INTO functie_has_evenement (functieID, evenementID, aantal) VALUES ('1', '$evenementID', '$obers')";
$gastheren_vrouwen = "INSERT INTO functie_has_evenement (functieID, evenementID, aantal) VALUES ('2', '$evenementID', '$gastheren_vrouwen')";
$sql_barkeepers = "INSERT INTO functie_has_evenement (functieID, evenementID, aantal) VALUES ('3', '$evenementID', '$barkeepers')";

$result = $DBConnect2->query($sql_ober);

if ($DBConnect2->query($sql_ober) == true){
    echo "gelukt";
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$sql_ober. "<br>". $DBConnect2->error;
}

$result2 = $DBConnect2->query($gastheren_vrouwen);
if ($DBConnect2->query($gastheren_vrouwen) == true){
    echo "gelukt";
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$gastheren_vrouwen. "<br>". $DBConnect2->error;
}

$result3 = $DBConnect2->query($sql_barkeepers);
if ($DBConnect2->query($sql_barkeepers) == true){
    echo "gelukt";
    header("location:../index.php");
}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo "error ".$sql_barkeepers. "<br>". $DBConnect2->error;
}
$DBConnect2->close();








?>
