<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 4-3-2020
 * Time: 08:57
 */


// Initialize the session
$email = htmlspecialchars($_SESSION["email"]);

// Check if the user is logged in, if not then redirect him to login page



$DBConnect = new mysqli("localhost","root","","winkel_examen");
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
        /**{*/
            /*border: 1px black dotted;*/
        /*}*/
        .form-control{
            display:inline-block;
            width:50%;
            height: 25px;
            padding: 0px;
            font-size:1rem;
            font-weight:400;
            line-height:1.5;
            color:#495057;
            background-color:#fff;
            background-clip:padding-box;
            border:1px solid #ced4da;
            border-radius:.25rem;
            transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}
        @media screen and (max-width:517px) {





        }

    </style>

</head>
<body>

<div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>, dit is jouw profiel.</h1>

</div>


<div id="div_table">

    <form action="back/profiel_wijzigen.php" method="post">
        <div id="form">
            <h1 id="header">Profiel wijzigen</h1>
            <label class="col-25" for="" >Voornaam</label>
            <input class="form-control" type="text"  name="voornaam" value="<?php echo $voornaam?>">
            <br><br>

            <label class="col-25" for="" >Tussenvoegsel</label>
            <input class="form-control" type="text"  name="tussenvoegsel" value="<?php echo $tussenvoegsel?>">
            <br><br>

            <label class="col-25" for="" >Achternaam</label>
            <input class="form-control" type="text"  name="achternaam" value="<?php echo $achternaam?>">
            <br><br>

            <label class="col-25" for="" >E-mail</label>
            <input class="form-control" type="text"  name="email" value="<?php echo $email?>">
            <br><br>

            <label class="col-25" for="" >Telefoon nummer</label>
            <input class="form-control" type="tel"  name="telefoon" value="<?php echo $telefoon?>">
            <br><br>
            <br><br><br><br>
            <input type="submit" class="btn btn-primary" value="Wijzig"><br>
        </div>
    </form>

    <div id="1" >
    </div>

</div>
</body>
</html>