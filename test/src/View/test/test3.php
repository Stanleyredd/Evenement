<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 20-4-2020
 * Time: 13:06
 */

include "src/View/layout/header.php";
?>


<ul>
    <?php foreach ($tests as $test){ ?>
            <li><?= $test['email']; ?></li>
    <?php }  ?>
</ul>




<?php
include "src/View/layout/footer.php";
?>