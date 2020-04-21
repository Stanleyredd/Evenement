<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 20-4-2020
 * Time: 13:06
 */

include "src/View/layout/header.php";
?>

<div>
<ul style="border: 1px solid black;">
    <?php foreach ($tests as $tes1){ ?>
            <li><?= $tes1['accountID']; ?></li>
    <?php }  ?>
</ul>
    </div>
<div>
<ul style="border: 1px solid black;">
    <?php foreach ($tests2 as $test2){ ?>
            <li><?= $test2['voornaam']." ". $test2['achternaam'].": ". $test2['functieomschrijving']; ?></li>
    <?php }  ?>
</ul>




<?php
include "src/View/layout/footer.php";
?>