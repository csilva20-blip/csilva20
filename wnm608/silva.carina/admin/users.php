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

		<form method="post" action="">
			<div class="form-control">
				<div>
					<label class="form-label" for="user-name">Name</label>
					<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter User First and Last name">
				</div>
			</div>

			<div class=form-control>
				<div class="form-select">
					<label class="form-label" for="user-type">User Type</label>
					<select class="form-select" name="user-type" id="user-type" type="select"> $typeOptions </select>
				</div>
			</div>

			<div class="form-control">
				<label class="form-label" for="user-email">Email address</label>
				<input class="form-input" name="user-email" id="user-email" type="email" value="$user->email" placeholder="Enter User Email">

				 <!-- Need to adjust to make dynamic -->
				<small class="form-text-vaild"> &#10003; Looks Good!</small>
			</div>

			<div class="form-control ">

			            <label class="form-label" for="user-classes">Classes</label>
			            <div class="display-flex flex-align-center">
			                <div class="flex-stretch">
			                    <input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="001 ,002 ,003 ,etc.">
			                </div>

			                <div class="flex-none">
			                    <input class="form-button" type="submit" value="save changes"></input>
			                </div>

			            </div>

			        </div>
		</form>




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




