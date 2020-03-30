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
        #header{
            text-align: center;
        }


        #form {
            width: 60%;

            margin: 0 auto;
            margin-top: 5px;
            border: 1px black solid;

        }

        .col-25{
            text-align: left;
        }
        .col-75{
          text-align: left;
        }




    </style>
</head>
<body>
<div id="div_table">

        <form action="../back/toevoegen_evenement.php" method="post">
            <div id="form">
                <h1 id="header">Evenement toevoegen </h1>
                <label class="col-25" for="">Naam evenement</label>
                <input class="col-75" type="text" required  name="naam_evenement">
                <br><br>
                <label class="col-25" for="" >Datum</label>
              <input class="col-75" type="date" required name="datum">
                <br><br>

               <label class="col-25" for="">Locatie</label>
                <input class="col-75" type='text' required name="locatie">
                <br><br>
                <label class="col-25" for="">omschrijving</label>
                <textarea class="col-75"  required name="omschrijving"></textarea>
                <br><br>
                <label class="col-25" for="">Functies</label>
                <label class="col-25" for="">Barkeepers</label>
                <input class="col-75" type="number" required  name="barkeepers">
                <br><br>
                <label class="col-25" for="">Gastheren/vrouwen</label>
                <input class="col-75"  type="number" required  name="gastheren_vrouwen">
                <br><br>
                <label class="col-25"  for="">Obers</label>
               <input class="col-75" type="number" required  name="obers">

                <br><br><br><br>
                <input type="reset" value="Reset" /><br><br>
                <input type="submit" class="submit" value="Toevoegen"><br>
        </div>
    </form>

    <div id="1" >
    </div>

</div>

</body>
</html>
