<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 5-8-2019
 * Time: 22:59
 */

session_start();
$email = htmlspecialchars($_SESSION["email"]);
echo $email."<br><br>";



$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam= $_POST["achternaam"];
$emailNieuw= $_POST["email"];
$telefoon= $_POST["telefoon"];

echo $voornaam."<br>";
echo $tussenvoegsel."<br>";
echo $achternaam."<br>";
echo $emailNieuw."<br>";
echo $telefoon."<br>";




?>
<?php
$DBConnect = new mysqli("localhost","root","","evenement");
$sql = "Select * from account where email = '$email'";
$result = $DBConnect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $accountID = $row["accountID"];



    }
}else{
    $DBConnect->error;
}
$DBConnect->close();

?>

<?php
$DBConnect2 = new mysqli("localhost","root","","evenement");

if ($emailNieuw == "") {
    $sql = "UPDATE account SET voornaam = '$voornaam', tussenvoegsel= '$tussenvoegsel' , achternaam= '$achternaam', email= '$email', telefoon = '$telefoon'  WHERE accountID = '$accountID';";

}else{
    $sql = "UPDATE account SET voornaam = '$voornaam', tussenvoegsel= '$tussenvoegsel' , achternaam= '$achternaam', email= '$emailNieuw', telefoon = '$telefoon'  WHERE accountID = '$accountID';";
    $email = $emailNieuw;
//    $emailNieuw = $email;
}


if ($DBConnect2->query($sql) == true){
    echo"nieuwe email ".$email;
    header("location:../back/logout.php");

}else{
    echo "Er is iets fout gegaan, probeer het opnieuw.<br><br>";
    echo "De error is: ";
    echo $sql. "<br>". $DBConnect2->error;
}

$DBConnect2->close();







?>