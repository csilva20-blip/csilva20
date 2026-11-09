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

		<div class="grid">
			<div class="col-xs-12 col-md-6 card">
				<h2>Checkout</h2>
				<hr>

				<h3>Address</h3>

				<form class="form">
					<div class="form-control">
						<label for="address-street" class="form-label">Street</label>
						<input id="address-street" type="text" placeholder="Street Name" class="form-input">
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="address-city" class="form-label">City</label>
								<input id="address-city" type="text" placeholder="City" class="form-input">
							</div>
							<div class="col-xs-12 col-md-6">
								<label for="address-state" class="form-label">State</label>
								<input id="address-state" type="text" placeholder="State" class="form-input">
							</div>
						</div>
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="address-zip" class="form-label">Zip Code</label>
								<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
							</div>
							<div class="col-xs-12 col-md-6">
								<label for="address-country" class="form-label">Country</label>
								<input id="address-country" type="text" placeholder="Country" class="form-input">
							</div>
						</div>
					</div>

					<h3>Payment</h3>

					<div class="form-control">
						<label for="payment-name" class="form-label"> Full Name</label>
						<input id="payment-name" type="text" placeholder="Name" class="form-input">
					</div>
					<div class="form-control">
						<label for="payment-number" class="form-label">Card Number</label>
						<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="payment-expiration" class="form-label">Expiration</label>
								<input id="payment-expiration" type="text" placeholder="MM / YY" class="form-input">
							</div>
							<div class="col-xs-12 col-md-6">
								<label for="payment-cvv" class="form-label">CVV</label>
								<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
							</div>
						</div>
					</div>
					<div class="form-control">
						<label for="payment-zip" class="form-label">Zip Code</label>
						<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
					</div>

					<div class="form-control">
						<input type="submit" class="form-button" value="submit">
					</div>
				</form>

				


			</div>

			<div class="col-xs-12 col-md-6 card">
				<h2>Your Cart</h2>

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

	</div>

</body>
</html>