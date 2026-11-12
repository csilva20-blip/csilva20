<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

// print_p($product);


?><!DOCTYPE html>
<html lang="en">
<head>

	<title>Cart</title>
	<?php include "sections/meta.php"; ?>

</head>

<body>

	<?php include "sections/navbar.php"; ?>

	<div class="container">
		<div class="card">
			<h2>Product Added to Cart &rarr; <?= htmlspecialchars($product->title) ?></h2>

			<?php if ($product) { ?>

				<p>
					<?= htmlspecialchars($product->title) ?> &middot;
					<?= htmlspecialchars($product->size) ?> &middot;
					$<?= number_format($product->price, 2) ?>
						
				</p>

				<a href="checkout.php?id=<?= $product->id ?>" class="form-button">Checkout</a>

			<?php } else { ?>

				<p>Your cart is empty.</p>
				<a href="product_list.php" class="form-button">Continue shopping</a>

			<?php } ?>
			
		</div>
	</div>

</body>
</html>