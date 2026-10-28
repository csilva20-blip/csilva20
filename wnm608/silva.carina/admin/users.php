<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

$classes = implode(",",$user->classes);

$allUsers = file_get_json("../data/users.json");
$typeOptions = getTypeOptions($allUsers, $user->type);



echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php"> back </a></li>
	</ul>
	<hr>
	<br>
</nav>

<div class="container">

	<h3> Edit User Information </h3>

	<div class="card hard">	
		<div class="form-control">
			<div>
				<label class="form-label" for="users-name">Name</label>
				<input class="form-input" type="text" id="users-name" name="name" value="$user->name">
			</div>
		</div>

		<div class=form-control>
			<div class="form-select">
				<label class="form-label">User Type</label>
				<select id="users-type" name="type"> $typeOptions </select>
			</div>
		</div>

		<div class="form-control">
			<label class="form-label" for="email-default">Email address</label>
			<input id="email-default" type="email" value="$user->email" class="form-input" >
			<small class="form-text-vaild"> &#10003; Looks Good!</small>
		</div>

		<div class="form-control ">

		            <label class="form-label" for="email-default">Classes</label>

		            <div class="display-flex flex-align-center">
		                <div class="flex-stretch">
		                    <input type="email" placeholder="$classes" class="form-input">
		                </div>

		                <div class="flex-none">
		                    <button type="submit" class="form-button">Save</button>
		                </div>

		            </div>

		        </div>


</div>



<div>


HTML;

}

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
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card">

			<h2>User List</h2>
			<br>

			<?php

			if (isset($_GET['id'])) {
				//echo "user";

				showUserPage($users[$_GET['id']]);

			} else {

			?>

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

		<?php } ?>

			

		</div>
	</div>

	
</body>

</html>




