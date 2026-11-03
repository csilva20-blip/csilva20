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
			<div class="grid gap">
				<div class="col-xs-3 col-md-1">
					<figure class="figure ratio-1-1"><img src="https://placehold.co/800x1000" alt="alt text placeholder"></figure>
					<figure class="figure ratio-1-1"><img src="https://placehold.co/800x1000" alt="alt text placeholder"></figure>
					<figure class="figure ratio-1-1"><img src="https://placehold.co/800x1000" alt="alt text placeholder"></figure>
				</div>

				<div class="col-xs-9 col-md-6">
					<figure class="figure ratio-4-5"><img src="https://placehold.co/800x1000" alt="alt text placeholder"></figure>
				</div>
				<div class="col-xs-12 col-md-5">
					<h2><?= $product['name'] ?></h2>
					<h3>$<?= $product['price'] ?></h3>
					<small class="form-text-helper"> short product description here</small>

						<form action="cart.html">
						<div class="grid gap form-control">
							<div class="col-xs-4"><div class="form-select"><select aria-label="Quantity"><option>1</option><option>2</option><option>3</option></select></div></div>

							<div class="col-xs-8"><div class="form-select"><select aria-label="Size"><option>8 oz</option><option>12 oz</option></select></div></div>
						</div>
						<div class="form-control">
							<a href="cart.php?id=<?= $product['id'] ?>" class="form-button">Add to Cart</a>
						</div>
						
					</form>

				</div>
			</div>

	</div>

 
	<div class="container">
		<div class="card">

		</div>
		<div class="card medium">
			<div class="grid gap flex-align-center">
				<div class="col-xs-12 col-md-6"><figure class="figure ratio-1-1"><img src="img/unsplash006.jpg" alt="Curl Defining Cream on a stone dish"></figure></div>
				<div class="col-xs-12 col-md-6"><h3>Why you will love it</h3><p>Defined curls that stay soft. Works on wavy, curly and coily hair.</p></div>
			</div>
		</div>
		<div class="card">
			<h3>You may also like</h3>

			<?php include "sections/featured_product_list.php"?>


		</div>
	</div>
 
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-6 col-md-3"><div class="card medium"><h4>Benefit</h4><small>This is placeholder benefit text</small></div></div>
			<div class="col-xs-6 col-md-3"><div class="card medium"><h4>Benefit</h4><small>This is placeholder benefit text</small></div></div>
			<div class="col-xs-6 col-md-3"><div class="card medium"><h4>Benefit</h4><small>This is placeholder benefit text</small></div></div>
			<div class="col-xs-6 col-md-3"><div class="card medium"><h4>Benefit</h4><small>This is placeholder benefit text</small></div></div>
		</div>
	</div>
 
	<div class="container">
		<div class="card dark">
			<h3>Get curl care tips</h3>
			<p>Routines and early access to new drops.</p>
			<form action="#" class="grid gap">
				<div class="col-xs-12 col-md-8"><div class="hotdog"><input type="email" aria-label="Email address" placeholder="Email address"></div></div>
				<div class="col-xs-12 col-md-4"><button class="form-button dark" type="submit">Sign up</button></div>
			</form>
		</div>
	</div>
 
	<footer class="footbar">
		<div class="container grid gap">
			<div class="col-xs-12 col-md-8">
				<h1>Curls By Emma</h1>
				<p>Hair care for every curl pattern.</p>
			</div>
			<nav class="col-xs-12 col-md-4 nav">
				<ul>
					<li><a href="#">Menu Link</a></li>
					<li><a href="#">Menu Link</a></li>
					<li><a href="#">Menu Link</a></li>
					<li><a href="#">Menu Link</a></li>
					<li><a href="#">Menu Link</a></li>
					<li><a href="#">Menu Link</a></li>
				</ul>
			</nav>
		</div>
	</footer>

</body>
</html>




