<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 16:39
 */
include "src/View/layout/header.php";

            if (!isset($_SESSION['account'])) {
                header("location: index.php?controller=account&action=login");
            }
                ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

</head>
<body>

</body>
</html>

<h2 id="id">
<?php
echo "".$_SESSION['account'];
?>
</h2>

<div class="grid-container">

    <div class="item2">

        <div class="vertical-menu">
            <a href="#">Bestellingen</a>
            <a href="#">Accountoverzicht</a>
            <a href="#">Contact</a>
            <a href="#">Uitloggen</a>
        </div>


    </div>
    <div class="item3">

        <div id="bestellingen">
            <table>
            <tr>
                <td>bestelling nummer</td>
                <td>Product naam/namen</td>
                <td>Datum</td>
                <td>Prijs</td>
            </tr>
                <tr>
                <td>00234155</td>
                <td>airpods</td>
                <td>12-06-2020</td>
                <td>€180</td>
            </tr>
            </table>
        </div>

    </div>


</div>

<?php
 include "src/View/layout/footer.php";
 ?>
