<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
	<title> User Admin Page </title>

	<?php include "../sections/meta.php";?>


</head>

<body>

	<header>
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav div class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card">

			<h2>User List</h2>

			<nav class="nav">
				<ul>
					<?php
						for($i=0; $i<count($users); $i++){
							echo 
							"<li>
								<a href='admin/users.php?id=$i'> {$users[$i]->name}</a>

							</li>";

					}
					?>
					
				</ul>
				
			</nav>

			

		</div>
	</div>

	
</body>

</html>




