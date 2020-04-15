<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 17-3-2020
 * Time: 19:57
 */

include "back/conn.php";



//                                $sql1 = "Select * from account;";
//                                $conn3 = new mysqli('localhost', 'root', '', 'evenement');
//                                $result = $conn3->query($sql1);
//
//                                if ($result->num_rows > 0) {
//                                    // output data of each row
//                                    while($row = $result->fetch_assoc()) {
//                                        $accountID = $row['accountID'];
//
//                                        echo "<br>$accountID<br>";
//
//                                    }
//                                } else {
//                                    echo'errpr'.$conn3->connect_error;
//                                }
//
//
//
//$result = $conn3->query($sql1);

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
            /*border: 1px black dotted;*/
        }
        /*  ↓↓↓↓navbar↓↓↓↓ */
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
        .container{
            text-align: center;
        }
        table.table1 {
            margin: 50px auto;
            text-align: center;
            text-decoration: none;
        }


        td {
            border: 1px black solid;

        }
        #toevoegen_div{
            text-align: center;
        }
        a{
            text-decoration: none;

        }div{
             margin: 1%;

         }
        #nav_ul {

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .nav_li {
            float: left;
        }

        .nav_a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
        #login{
            float: right;
        }


    </style>
</head>
<body>
<div>
    <ul id="nav_ul">
        <li class="nav_li"><a class="nav_a" href="index.php">Home</a></li>
        <li class="nav_li"><a class="nav_a" href="accounts.php">Accounts</a></li>
        <li class="nav_li"><a class="nav_a" href="evenementen.php">Evenementen </a></li>
        <li class="nav_li"><a class="nav_a" href="contact.php">Contact </a></li>
        <li id="login" class="nav_li"><a class="nav_a" href="/evenement/login_template/login.php">Mijn profiel </a></li>
    </ul>
</div>
<div id="toevoegen_div">

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
            <div class="row">



                <?php








                $conn = new mysqli('localhost', 'root', '', 'evenement');
                if(isset($_GET['search'])){
                    $searchKey = $_GET['search'];
                    $sql = "SELECT * FROM account WHERE voornaam LIKE '%$searchKey%' OR  achternaam LIKE '%$searchKey%'";
                }else
                    $sql = "SELECT * FROM account";
                $result = $conn->query($sql);
                ?>



                <form action="" method="GET">
                    <div class="col-md-6">
                        <label for="">Typ de persoon die je zoekt!</label><br><br>
                        <input type="text" name="search" class='form-control' placeholder="Zoek hier" value=<?php echo @$_GET['search']; ?> ><br><br>
                    </div>
                    <div class="col-md-6 text-left">
                        <button class="btn">Zoek!</button>
                    </div>
                </form>


            </div>

            <div>
                <div class="table1">
                    <table class="table1">
                        <tr>
                            <th>Titel</th>
                            <th>Nummer</th>
<!--                            <th>Totaal uren</th>-->
                            <th>Toevoegen</th>
                            <th>Verwijder</th>
                        </tr>
                        <?php while($row = $result->fetch_object() ): ?>

                            <tr>
                                <td><?php echo $row->voornaam; ?></td>
                                <td><?php echo $row->achternaam ?></td>
<!--                                <td>--><?php //echo $row->accountID ?><!--</td>-->
                                <td><a href="uren_toevoegen.php?voornaam=<?php echo $row->voornaam ?>">Toevoegen</a></td>
                                <td><a href='uren_verwijderen.php?voornaam=<?php echo $row->voornaam ?>'>Verwijder</a></td>

                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="toevoegen_div">

</div>


<!--<div style="text-align: center; border: black 1px solid" >-->

<!--    --><?php
//        $conn2 = new mysqli('localhost', 'root', '', 'evenement');
//        $sqltijd = "Select *, sum(round(time_to_sec(presentie.eindtijd-presentie.begintijd)/3600,1))
//as totaaluur from presentie group by accountID;";
//        $result = $conn2->query($sqltijd);
//
//        if ($result->num_rows > 0) {
//            // output data of each row
//            while($row = $result->fetch_assoc()) {
//                $totaaluur =  $row['totaaluur'];
//                $accountID =  $row['accountID'];
//
//                echo "AccountID:$accountID<br>$totaaluur<br><br>";
//
//            }
//        } else {
//            echo'error'.$conn2->connect_error;
//        }
//
//
//
//    $result = $conn2->query($sqltijd);
//
//
//
//
//    ?>




</div>



</body>
</html>