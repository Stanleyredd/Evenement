<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 16:39
 */
include "src/View/layout/header.php";

?>
<ul>

<?php foreach ($functies as $functie ){ ?>

    <li>
        <?= $functie['functieomschrijving']; ?>
    </li>

<?php } ?>

</ul>


<ul>

    <?php foreach ($functies as $functieID ){ ?>

        <li>
            <?= $functieID['functieID']; ?>
        </li>

    <?php } ?>

</ul>





<?php
include "src/View/layout/footer.php";
?>
