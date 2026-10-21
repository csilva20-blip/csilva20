<!DOCTYPE html>
<html lang="en">
<head>

	<title>Product List</title>
	<?php include "sections/meta.php"; ?>

</head>

<body>

	<?php include "sections/navbar.php"; ?>

	<?php include "lib/php/products.php"; ?>

	<div class="container">
		<div class="card">
			<h2>Product List</h2>

			<div class="grid gap">
				<?php $product = $products["01"]; include "sections/product_card.php"; ?>
				<?php $product = $products["02"]; include "sections/product_card.php"; ?>
				<?php $product = $products["03"]; include "sections/product_card.php"; ?>
				<?php $product = $products["04"]; include "sections/product_card.php"; ?>
			</div>
		</div>
	</div>

</body>
</html>