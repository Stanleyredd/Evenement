<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 15:07
 */

include "src/View/layout/header.php";

?>

<?php

/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 14:42
 */
include ("config/config.php");
include("src/Lib/db.php");


include('config/db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
    $code = $_POST['code'];
    $result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];
    $image = $row['image'];

    $cartArray = array(
        $code=>array(
            'name'=>$name,
            'code'=>$code,
            'price'=>$price,
            'quantity'=>1,
            'image'=>$image)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";


    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
            $status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";


        } else {
            $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
            $status = "<div class='box'>Product is added to your cart!</div>";


        }

    }
}
?>

    <html>
    <head>
        <title>test</title>
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <style>

        </style>
    </head>
    <body>
    <div id="header">
    <?php
    if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
        ?>
        <div class="cart_div" >
            <a href="cart.php" id="bigcart"><img src="cart-icon.png"/>Winkelwagen<span><?php echo $cart_count; ?></span></a>


        </div>
        <?php
    }
    ?>

        <h2 style="text-align: center">Winkel</h2>
        <h5 id="winkelwagen"><a href="cart.php" style="color: #111111; text-decoration: none">Winkelwagen</span></a></h5>


    </div>

<div style="text-align: center">
        <?php


        $result = mysqli_query($con,"SELECT * FROM `products`");
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img style='height: 100px;' src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>€".$row['price']."</div>
			  <button type='submit' class='buy'>+ In winkelwagen</button>
			  </form>
		   	  </div>";
        }
        mysqli_close($con);
        ?>
<!--            <a href="cart.php"><img src="cart-icon.png" /> Cart<span></span></a>-->

        <div style="clear:both;"></div>

        <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
        </div>

        <br /><br />
    </div>




    </div>
    </body>
    </html>



        </div>
    </nav>


<?php
include "src/View/layout/footer.php";


?>