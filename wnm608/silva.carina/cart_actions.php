<?php 

include_once "lib/php/functions.php";

switch ($_GET['action'] ?? '') {
	case 'add-to-cart':
		$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_POST['product-id'])[0];

		addToCart($_POST['product-id'],$_POST['product-amount'],$_POST['product-size']);
		header("location:added-to-cart.php?id={$_POST['product-id']}");
		break;

	
	
	case 'update-cart-item':
	    $id = filter_input(INPUT_POST, 'product-id', FILTER_VALIDATE_INT);
	    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);

	    if ($id === false || $id === null || $id < 1 ||
	        $amount === false || $amount === null || $amount < 0) {
	        header("location:cart.php");
	        exit; }

	    if ($amount == 0) {
	        $_SESSION['cart'] = array_values(array_filter(
	            getCart(),
	            function($o) use ($id) {
	                return $o->id != $id;} ));
	    } else {
	        $p = cartItemById($id);

	        if ($p) { $p->amount = $amount; }
	    }

	    header("location:cart.php");
	    exit;

	case 'delete-cart-item':
		$_SESSION['cart'] = array_filter($_SESSION['cart'], function($o){return $o->id!=$_POST['id'];});
		header("location:cart.php");
		break;

	case 'clear-cart':
		clearCart();
		break;

	default:
		die("Incorrect Action");
		break;
}


print_p([$_GET,$_POST,$_SESSION]); 