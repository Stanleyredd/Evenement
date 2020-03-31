<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 30-3-2020
 * Time: 20:59
 */
include_once "back/conn.php";

$voornaam = $_GET['voornaam'];


    $DBConnect = new mysqli("localhost","root","","evenement");
    $sql2 = "select * from account where voornaam='$voornaam'";
    $result = $DBConnect->query($sql2);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $accountID = $row['accountID'];
        $achternaam = $row['achternaam'];
    }
    }else{
        $DBConnect->error;
    }
$DBConnect->close();

?>
<?php


$DBConnect3 = new mysqli("localhost","root","","evenement");
$sql3 = "Select * from presentie where accountID = '$accountID'";
$result = $DBConnect3->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementID = $row['evenementID'];
    }
}else{
    $DBConnect3->error;
}
$DBConnect3->close();

?>

<?php


$DBConnect3 = new mysqli("localhost","root","","evenement");
$sql3 = "Select * from evenement";
$result = $DBConnect3->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $evenementnaam = $row['evenementnaam'];
    }
}else{
    $DBConnect3->error;
}
$DBConnect3->close();

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }


        #form {
            width: 65%;
            margin: 0 auto;
            margin-top: 10px;
            border: 1px black solid;
            text-align: center;
        }

        #table1 {
            margin: 50px auto;
        }

        td {
            border: 1px black solid;

        }

        input {
            width: 30%;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include_once "navbar.php";
?>
<table id="table1">


    <form action="back/uren_toevoegen.php" method="post">
        <div id="form">
            <h1>Uren verwijderen voor <?php echo$voornaam ?></h1>
            <label for="" ><h3>Voornaam</h3></label>
            <label readonly value=''><?php echo $voornaam ?></label>

            <br><br><br><br><br><br>
            <?php

            echo "<tr>";
            echo "<td class='text'>". '<h3>Voornaam</h3>'. "</td>";
            echo "<td class='text'>". '<h3>Achternaam</h3>'. "</td>";
            echo "<td class='text'>".'<h3>Evenement naam</h3>'. "</td>";
            echo "<td>".'<h3>Datum</h3>'. "</td>";
            echo "<td>".'<h3>Begin tijd</h3>'. "</td>";
            echo "<td>".'<h3>Eind tijd</h3>'. "</td>";
            echo "<td>".'<h3>Verwijder</h3>'. "</td>";
            echo "</tr>";



            $DBConnect2 = new mysqli("localhost","root","","evenement");
            $sql = "Select presentie.accountID, presentie.evenementID, presentie.datum, 
presentie.begintijd, presentie.eindtijd, evenement.evenementnaam 
from presentie left join evenement on presentie.evenementID = evenement.evenementID  where presentie.accountID = '$accountID'";


            $result = $DBConnect2->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $evenementID = $row['evenementID'];

                    echo "<tr>";
                    $accountID = $row['accountID'];
                    echo "<td>".$voornaam. "</td>";
                    echo "<td>".$achternaam. "</td>";
                    echo "<td>".$evenementnaam = $row['evenementnaam']."</td>";
                    echo "<td>".$row['datum']. "</td>";
                    echo "<td>".$row['begintijd']. "</td>";
                    echo "<td>".$row['eindtijd']. "</td>";
                    echo "<td>". "<a href='back/verwijder_uren.php?accountID=$row[accountID]&evenementID=$row[evenementID]&datum=$row[datum];'>Verwijder</a>  " . "</td>";


                    echo "</tr>";
                }
            } else {


            }
            $DBConnect2->close();
            ?>
        </div>
    </form>

    <div id="1" >
    </div>

</table>


<table id="table1">









</table>

</body>
</html>



