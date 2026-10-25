<?php

include "../lib/php/functions.php";

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");


?>






 
<!DOCTYPE html>
<html lang="en">
<head>x


	<title> Document </title>

	<?php include "../sections/meta.php";?>


</head>

<body>

	<?php include "../sections/navbar.php";?>

	<?php
	include "../lib/php/products.php";

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

			<h2>Notes</h2>

			<?php

			for($i=0; $i<count($notes_object->notes); $i++){
				echo "<li>{$notes_object->notes[$i]}</li>";

			}

			?>

		</div>

		<div class="card">

			<h2>Users</h2>

			<?php

			for($i=0; $i<count($users_array); $i++){
				echo 
				"<li>
					<strong>{$users_array[$i]->name}</strong>
					<span> - {$users_array[$i]->type}</span>
					<span> - {$users_array[$i]->email}</span>

				</li>";

			}

			?>

		</div>
	</div>

	<?php if ($product) { ?>
		<h2><?= $product['name'] ?></h2>
		<p><?= $product['size'] ?> &middot; $<?= $product['price'] ?></p>
		<a href="cart.php?id=<?= $product['id'] ?>" class="form-button">Add to Cart</a>

	<?php } else { ?>
		<p>Product not found.</p>
	<?php } ?>
	
</body>

</html>




