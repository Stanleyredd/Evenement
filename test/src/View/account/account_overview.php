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

<?php foreach ($accounts as $account ){ ?>
<li>
    <?= $account['accountID']; ?>
</li>
<?php } ?>
</ul>
<?php
 include "src/View/layout/footer.php";
 ?>
