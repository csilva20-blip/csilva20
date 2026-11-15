<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Added Item to Cart</title>

	<?php include "sections/meta.php"; ?>
</head>
<body>

	<?php include "sections/navbar.php"; ?>

	<div class="container">
		<div class="card">
			<h2> You Added <?= $product->title ?> to your cart </h2>
			<p>There are now <?= $cart_product-> amount ?> of <?= $product->title?> in your cart</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none form"><a class="form-button" href="cart.php">Go to cart</a></div>
			</div>




		</div>


	</div>
	
</body>
</html> 