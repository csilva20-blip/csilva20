<!DOCTYPE html>
<html lang="en">
<head>


	<title> Document </title>

	<?php include "sections/meta.php";?>


</head>

<body>

	<?php include "sections/navbar.php";?>

	<?php
	include "lib/php/products.php";

	$product = null;
	$id = $_GET['id'] ?? null;

	if ($id !== null) {
		foreach ($products as $p) {
			if ($p['id'] == $id) {
				$product = $p;
				break;
			}
		}
	}
	?>

	<div class="container">
		<div class="card">
		
		<?php if ($product) { ?>
			<h2><?= $product['name'] ?></h2>
			<p><?= $product['size'] ?> &middot; $<?= $product['price'] ?></p>
			<a href="cart.php?id=<?= $product['id'] ?>" class="form-button">Add to Cart</a>

		<?php } else { ?>
			<p>Product not found.</p>
		<?php } ?>

		</div>
	</div>
	
</body>
</html>




