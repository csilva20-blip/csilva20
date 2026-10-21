<!DOCTYPE html>
<html lang="en">
<head>

	<title>Checkout</title>
	<?php include "sections/meta.php"; ?>

</head>

<body>

	<?php include "sections/navbar.php"; ?>

	<?php
	include "lib/php/products.php";

	$product = $products[$_GET['id']];
	?>

	<div class="container">
		<div class="card">
			<h2>Checkout</h2>

			<?php if ($product) { ?>
				<p>Order summary: <?= $product['name'] ?> &middot; <?= $product['size'] ?></p>
				<p>Total: $<?= $product['price'] ?></p>

				<a href="confirmation.php?id=<?= $product['id'] ?>" class="form-button">Place order</a>

			<?php } else { ?>
				<p>Nothing to check out yet.</p>
				<a href="product_list.php" class="form-button">Shop products</a>
			<?php } ?>
			
		</div>
	</div>

</body>
</html>