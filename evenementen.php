<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 25-3-2020
 * Time: 11:58
 */
include_once "navbar.php";


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


        td {
            border: 1px black solid;
        }
        #div_table{
            text-align: center;
        }
        #table1 {
            margin: 1% auto;

        }
    </style>
</head>
<body>





<div id="div_table">
    <h3>Evenementen</h3>
    <a href="evenement/toevoegen.php"><h3>Evenement toevoegen</h3></a>
    <a href="evenement/wijzigen.php"><h3>Evenement wijzigen</h3></a>
    <a href="evenement/verwijderen.php"><h3>Evenement delete</h3></a>
<!--    <table id="table1">-->
<!--    <tr>-->
<!--        <td>datum</td>-->
<!--        <td>naam evenement</td>-->
<!--        <td>locatie</td>-->
<!--        <td>verwijder</td>-->
<!--        <td>wijzigen</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>27-05-2019</td>-->
<!--        <td>Jazz in duketown</td>-->
<!--        <td>Grote markt, s ‘Hertogenbosch</td>-->
<!--        <td><a href="evenement/verwijderen.php">❌</a></td>-->
<!--        <td><a href="evenement/wijzigen.php">❌</a></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>28-06-2019</td>-->
<!--        <td>North Sea Jazz</td>-->
<!--        <td>Ahoy, Rotterdam</td>-->
<!--        <td><a href="evenement/verwijderen.php">❌</a></td>-->
<!--        <td><a href="evenement/wijzigen.php">❌</a></td>-->
<!---->
<!--    </tr>-->
<!--    </table>-->


</div>

</body>
</html>
<?php
include_once "footer.php";

?>