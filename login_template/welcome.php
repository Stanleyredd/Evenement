<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 4-3-2020
 * Time: 08:57
 */




// Initialize the session
    session_start();
$email = htmlspecialchars($_SESSION["email"]);

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$DBConnect = new mysqli("localhost","root","","evenement");
$sql = "Select * from account where email = '$email'";
$result = $DBConnect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
            $voornaam = $row["voornaam"];
            $tussenvoegsel = $row["tussenvoegsel"];
            $achternaam= $row["achternaam"];
            $email= $row["email"];
            $telefoon= $row["telefoon"];


    }
}else{
    $DBConnect->error;
}
$DBConnect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }

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
        } div{
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
        #logout{
            float: right;
            padding-top: 0.3%;
            padding-right: 0.3%;

        }
    </style>
</head>
<body>
<div>
    <ul id="nav_ul">
        <li class="nav_li"><a class="nav_a" href="../index.php">Home</a></li>
        <li class="nav_li"><a class="nav_a" href="../accounts.php">Accounts</a></li>
        <li class="nav_li"><a class="nav_a" href="../evenementen.php">Evenementen </a></li>
        <li class="nav_li"><a class="nav_a" href="../contact.php">Contact </a></li>
        <li class="nav_li" id="logout">    <a href="back/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </li>
    </ul>
</div>
<div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>, dit is jouw profiel.</h1>

</div>


<div id="div_table">

    <form action="back/profiel_wijzigen.php" method="post">
        <div id="form">
            <h1 id="header">Profiel wijzigen</h1>
            <label class="col-25" for="" >Voornaam</label>
            <input class="col-75" type="text"  name="voornaam" value="<?php echo $voornaam?>">
            <br><br>

            <label class="col-25" for="" >Tussenvoegsel</label>
            <input class="col-75" type="text"  name="tussenvoegsel" value="<?php echo $tussenvoegsel?>">
            <br><br>

            <label class="col-25" for="" >Achternaam</label>
            <input class="col-75" type="text"  name="achternaam" value="<?php echo $achternaam?>">
            <br><br>

            <label class="col-25" for="" >E-mail</label>
            <input class="col-75" type="text"  name="email" value="<?php echo $email?>">
            <br><br>

            <label class="col-25" for="" >Telefoon nummer</label>
            <input class="col-75" type="tel"  name="telefoon" value="<?php echo $telefoon?>">
            <br><br>
            <br><br><br><br>
            <input type="submit" class="submit" value="Wijzig"><br>
        </div>
    </form>

    <div id="1" >
    </div>

</div>
</body>
</html>