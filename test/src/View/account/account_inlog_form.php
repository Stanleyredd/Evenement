<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 16:39
 */
include "src/View/layout/header.php";

?>

    <h5>Inloggen</h5>
<form action="index.php?controller=account&action=checklogin" method="post">
<div class="form-group">
    <label for="emailaddress">Email address</label>
    <input type="email" name="emailaddress" class="form-control"  id="emailaddress" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="emailpassword">Password</label>
    <input type="password" name="emailpassword" class="form-control" id="emailpassword" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "src/View/layout/footer.php"; ?>