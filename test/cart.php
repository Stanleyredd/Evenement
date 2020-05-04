<?php
session_start();
    include "src/View/layout/header.php";

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}

}
?>
<html>
<head>
<title>tes</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

</head>
<body>

<div style="width:100%; margin:auto;">


<h2>Winkelwagen</h2>



<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>
<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
<option <?php if($product["quantity"]==6) echo "selected";?> value="6">6</option>
<option <?php if($product["quantity"]==7) echo "selected";?> value="7">7</option>
<option <?php if($product["quantity"]==8) echo "selected";?> value="8">8</option>
<option <?php if($product["quantity"]==9) echo "selected";?> value="9">9</option>
<option <?php if($product["quantity"]==10) echo "selected";?> value="10">10</option>
</select>
</form>
</td>
<td class="price"><?php echo "€".$product["price"]; ?></td>
<td class="uprice"><?php echo "€".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "€".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
  <?php
}else{
	echo "<h3>Je winkelwagen is leeg!</h3>";
	}
?>





<br /><br />
</div>
<div id="conainer2"  ">
<div class="" >
    <?php
    if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
    ?>
    <table class="table">
        <tbody>
        <tr>
            <td></td>
            <td>ITEM NAME</td>
            <td>QUANTITY</td>
        </tr>




        <?php
        foreach ($_SESSION["shopping_cart"] as $product){
            ?>
            <tr>
                <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                <td><?php echo $product["name"]; ?><br />
                    <form method='post' action=''>
                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                        <input type='hidden' name='action' value="remove" />
                        <button style="text-align: center" type='submit' class='remove'><img src="product-images/unnamed.png" alt=""</button>
                    </form>
                </td>
                <td>
                    <form method='post' action=''>
                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                        <input type='hidden' name='action' value="change" />
                        <select name='quantity' class='quantity' onchange="this.form.submit()">
                            <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                            <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                            <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                            <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                            <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                            <option <?php if($product["quantity"]==6) echo "selected";?> value="6">6</option>
                            <option <?php if($product["quantity"]==7) echo "selected";?> value="7">7</option>
                            <option <?php if($product["quantity"]==8) echo "selected";?> value="8">8</option>
                            <option <?php if($product["quantity"]==9) echo "selected";?> value="9">9</option>
                            <option <?php if($product["quantity"]==10) echo "selected";?> value="10">10</option>
                        </select>
                    </form>
                </td> </tr>
            <trclass="price">
                <td ></td>
                <td >UNIT PRICE</td>
                <td >ITEMS TOTAL</td>
            </tr>
            <tr class="price">
                <td></td>
                <td><?php echo "€".$product["price"]; ?></td>
                <td><?php echo "€".$product["price"]*$product["quantity"]; ?></td>
            </tr>
            <?php
            $total_price += ($product["price"]*$product["quantity"]);
        }
        ?>

        <tr>
            <td colspan="5" align="right">
                <strong>TOTAL: <?php echo "€".$total_price; ?></strong>
            </td>
        </tr>
        </tbody>
    </table>
        <?php
    }else{
        echo "<h3>Je winkelwagen is leeg!</h3>";
    }
    ?>
</div>
<div style="clear:both;"></div>

        </tbody>
    </table>
</div>
</body>
</html>
</div>
<a href="index.php?controller=evenement"><h3>Terug naar winkel</h3></a>
<div style="clear:both;"></div>