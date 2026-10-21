<!DOCTYPE html>
<html lang="en">
<head>

	<title>Cart</title>
	<?php include "sections/meta.php"; ?>

</head>

<body>

	<?php include "sections/navbar.php"; ?>

	<?php
	include "lib/php/products.php";

	$product = $products[$_GET['id'] ?? ""] ?? null;
	
	?>

	<div class="container">
		<div class="card">
			<h2>Cart</h2>

			<?php if ($product) { ?>

				<p>
					<?= $product['name'] ?> &middot; 
					<?= $product['size'] ?> &middot; 
					$<?= $product['price'] ?>
						
				</p>

				<a href="checkout.php?id=<?= $product['id'] ?>" class="form-button">Checkout</a>

			<?php } else { ?>

				<p>Your cart is empty.</p>
				<a href="product_list.php" class="form-button">Continue shopping</a>

			<?php } ?>
			
		</div>
	</div>

</body>
</html>