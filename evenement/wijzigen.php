<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 25-3-2020
 * Time: 13:19
 */

include_once "../back/conn.php";
include_once "../navbar.php";

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


        #form {
            width: 35%;
            margin: 0 auto;
            margin-top: 10px;
            border: 1px black solid;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="div_table">

    <table id="table1">


        <form action="back/back_toevoegen_nummer.php" method="post">
            <div id="form">
                <h1>Evenement wijzigen</h1>
                <label for="" >datum</label><br>
                <input type="date" required name="datum">
                <br><br>
                <label for="">Naam evenement</label><br>
                <input type="text" required  name="naam_evenement">
                <br><br>
                <label for="">Locatie</label><br>
                <input type='text' required name="locatie">
                <br><br>
                <label for="">Rollen</label><br>
                <input type='text' required name="rollen">
                <br><br><br><br><br><br>
                <input type="reset" value="Reset" /><br><br>
                <input type="submit" class="submit" value="Toevoegen"><br>
            </div>
        </form>

        <div id="1" >
        </div>
    </table>
</div>

</body>
</html>
