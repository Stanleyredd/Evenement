<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 25-3-2020
 * Time: 11:58
 */
include_once "navbar.php";

//                $conn = new mysqli('localhost', 'root', '', 'mydb');
//                if(isset($_GET['search'])){
//                    $searchKey = $_GET['search'];
//                    $sql = "SELECT * FROM nummer WHERE titel LIKE '%$searchKey%' OR  artiest LIKE '%$searchKey%'";
//                }else
//                    $sql = "SELECT * FROM nummer";
//                $result = $conn->query($sql);



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
        *{
            padding: 0;
            margin: 0;
        }
        #aangemeld_div, #presentsielijst{
            border: 1px solid black;
        }

        td{
            border: black 1px solid;
        }
        .functie_table{
            vertical-align: text-top;
        }
    </style>
</head>
<body>


<div>
    <h3>Account page</h3>
</div> <form action="" method="GET">
    <div class="col-md-6">
        <label for="">Typ de medewerker dat je zoekt!</label><br><br>
        <input type="text" name="search" class='form-control' placeholder="Zoek hier" value=<?php echo @$_GET['search']; ?> ><br><br>
    </div>
    <div class="col-md-6 text-left">
        <button class="btn">Zoek!</button>
    </div>
</form>
<?php //while($row = $result->fetch_object() ): ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $row->titel ?><!--</td>-->
<!--        <td>--><?php //echo $row->artiest ?><!--</td>-->
<!--        <td>--><?php //echo $row->duur ?><!--</td>-->
<!---->
<!--        <td><a href='wijzig_nummer.php?titel=--><?php
//            $titel = $row->titel; echo $titel ?><!--'>Wijzig</a></td>-->
<!--        <td><a href='back/back_verwijder_nummer.php?titel=--><?php
//            $titel = $row->titel; echo $titel ?><!--''>Verwijder</a></td>-->
<!---->
<!--    </tr>-->
<?php //endwhile; ?>
<div id="aangemeld_div">
    <div>
        <h4>Evenement Jazz in Duketown<br> Locatie: Grote markt, ‘sHertogenbosch<br></h4><br>
        <h4>Personeel</h4>
        <p>12 barkeepers</p>
        <p>7 gastheren/vrouwen</p>
        <p>5 obers</p>
    </div>
    <div id="toezeggingen">
        <h4>Toezeggingen</h4>
        <table>
        <tr>
            <td class="functie_table">Barkeepers</td>
            <td>stanley<br>koleman stara<br>koleman stara</td>
        </tr>
        <tr>
            <td class="functie_table">gastheren/vrouwen</td>
            <td>daniel lippens<br>koleman stara<br>koleman stara<br>koleman stara<br>koleman stara<br>koleman stara<br>koleman stara</td>
        </tr>
        </table>
    </div>
</div>

<div id="presentsielijst">

    <h3>Presentielijst 08-05-2019</h3>
    <table>
        <tr>
            <td>stanley</td>
            <td>15:30</td>
            <td>22:00</td>
            <td>6,5 uur</td>
        </tr>
        <tr>
            <td>daniel</td>
            <td>15:30</td>
            <td>22:00</td>
            <td>6,5 uur</td>
        </tr>
    </table>
</div>

</body>
</html>
