<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 15:07
 */

include "src/View/layout/header.php";

?>


    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;            border: 1px black solid ;


        }

        .div1 { grid-area: 1 / 1 / 2 / 2; }
        .div2 { grid-area: 1 / 2 / 2 / 3; }
        .div3 { grid-area: 1 / 3 / 2 / 4; }
        .div4 { grid-area: 1 / 4 / 2 / 5; }

        .item1 { grid-area: main; }
        .item2 { grid-area: datum; }
        .item3 { grid-area: naam; }
        .item4 { grid-area: locatie; }
        .item45 { grid-area: verwijder; }


        .grid-container {
            display: grid;
            grid-template-areas:
                    'main main main main main main'
                    'datum naam naam naam locatie verwijder';
            /*border: 1px black solid ;*/
            grid-gap: 10px;
            padding: 10px;
        }

        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            border: 1px black solid ;
            padding: 20px 0;
            font-size: 30px;

        }
<?php foreach ($evenementen as $evenement) { ?>
    </style><div class="parent">


    <div class="div1"> <?= $evenement['evenementID']; ?></div>
    <div class="div2"> <?= $evenement['evenementID']; ?></div>
    <div class="div3"> <?= $evenement['evenementID']; ?></div>
    <div class="div4"> <?= $evenement['evenementID']; ?></div>
</div><?php } ?>
    <div class="grid-container" style="text-align: center">
    <div class="item1" style="text-align: center">Evenementen</div>
    </div>

<?php foreach ($evenementen as $evenement) { ?>
    <div class="grid-container">



    <div class="item2"><h3> <?= $evenement['evenementID']; ?></h3></div>
    <div class="item3"<h3><?= $evenement['evenementnaam']; ?></h3></div>
    <div class="item4"><h3><?= $evenement['locatie']; ?></h3></div>
    <div class="item45">x</div>


</div><?php } ?>
<?php
include "src/View/layout/footer.php";
?>