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


			<?php 

			include_once "lib/php/functions.php";
			include_once "sections/templates.php";


			$result = makeQuery(
				makeConn(),
				"

				SELECT *
				FROM `products`
				ORDER BY `price` DESC


				"
			);
			
			echo "<div class='productlist grid gap'>",array_reduce($result,'productsListTemplate'),"</div>";



			?>

		</div>
	</div>

</body>
</html>