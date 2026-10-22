<!DOCTYPE html>
<html lang="en">
<head>

	<title>Home</title>
	<?php include "sections/meta.php"; ?>

</head>

<body>

	<?php 

	include "sections/navbar.php"; 
	include "lib/php/products.php"; 

	?>


	<div class="hero-window" style="background-image: url('img/terr.jpg')"></div>

	<div class="container">


		<div class="card">
			<h3>Shop by collection</h3>

			<?php include "sections/collection_grid.php"; ?>


		</div>

		<div class="card">
			<h3>Featured products</h3>

			<?php include "sections/featured_product_list.php"?>

		</div>
	</div>


	<footer class="footbar">

		<div class="card dark">
			<h3>Sign Up Here</h3>
			<p>Example for sign up info</p>
			<form action="#" class="grid gap">
				<div class="col-xs-12 col-md-8"><div class="hotdog"><input type="email" aria-label="Email address" placeholder="Email address"></div></div>
				<div class="col-xs-12 col-md-4"><button class="form-button dark" type="submit">Sign up</button></div>
			</form>
		</div>

	</footer>

</body>
</html>



	