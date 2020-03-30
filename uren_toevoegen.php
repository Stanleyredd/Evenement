<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 30-3-2020
 * Time: 20:59
 */
include_once "back/conn.php";

$voornaam = $_GET['voornaam'];


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
            width: 35%;
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
<table id="table1">


    <form action="back/uren_toevoegen.php" method="post">
        <div id="form">
            <h1>Uren toevoegen voor <?php echo$voornaam ?></h1>
            <label for="" >Voornaam</label><br>
            <input type="text" required name="voornaam" readonly value='<?php echo $voornaam ?>'>
            <br><br>
            <label for="">Evenement</label><br>
            <?php
            echo '<select name="evenementnaam"><option >Select</option>';

                $sqli = "SELECT DISTINCT evenementnaam FROM evenement";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                echo '<option style="text-align: center"  name="evenementnaam">'.$row['evenementnaam'].'</option>';
                }
                echo '</select>';
            ?>
            <br><br>
            <label for="">Datum</label><br>
            <input type='date' required name="datum">
            <br><br>
            <label for="">Begintijd</label><br>
            <input type='time' required name="begintijd">
            <br><br>
            <label for="">Eindtijd</label><br>
            <input type='time' required name="eindtijd">
            <br><br><br><br><br><br>
            <input type="submit" class="submit" value="Toevoegen"><br>
        </div>
    </form>

    <div id="1" >
    </div>
</table>
</body>
</html>
