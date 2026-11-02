<?php

include "../lib/php/functions.php";


$filename = "../data/users.json";
$users = file_get_json($filename);

$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
]; 


//file_put_contents json_encode explore $_POST 
// CRUD, Create Read Update Delete 


if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'update':
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email =  $_POST['user-email'];
			$users[$_GET['id']]->classes =  explode(", ", $_POST['user-classes']);

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case 'create':
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes =  explode(", ", $_POST['user-classes']);

			$id = count($users); 


			$users[] = $empty_user; 

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case 'delete':
			// code...
			break;

	}
}

function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "add" : "edit"; 
$createorupdate = $id == "new" ? "create" : "update";


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

		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

			<h2> $addoredit User </h2>
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
					<li><a href="<?=$_SERVER['PHP_SELF']?>">User List</a></li>
					<li><a href="<?=$_SERVER['PHP_SELF']?>?id=new">Add New User</a></li>
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

				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);

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




