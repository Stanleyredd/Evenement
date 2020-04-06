<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 15:07
 */


?>

<ul>

<?php foreach ($evenementen as $evenement ){ ?>
<li>
    <?= $evenement['omschrijving']; ?>
</li>
<?php } ?>
</ul>