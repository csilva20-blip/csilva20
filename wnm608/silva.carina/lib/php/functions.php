<?php

session_start();

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

function file_get_json($filename) {

	$file = file_get_contents($filename); 
	return json_decode($file);
}

function getTypeOptions($users, $selected) {
	$types = array_unique(array_map(fn($u) => $u->type, $users));
	sort($types);

	$options = "";

	foreach ($types as $type) {
		$isSelected = ($type === $selected) ? "selected" : "";
		$options .= "<option value=\"$type\" $isSelected>$type</option>";
	}

	return $options;
}

include "auth.php";


function makeConn(){
	$conn = new mysqli(...MYSQLIAuth());
	if($conn->connect_errno) die($conn->connect_error);
	$conn->set_charset('utf8');
	return $conn;

}

function makeQuery($conn, $qry) {
	$result = $conn->query($qry);

	if($conn->errno) die($conn->error); 
	$a = [];

	while ($row = $result->fetch_object()) {
		$a[] = $row;
	}

	return $a; 
}

// CART FUNCTIONS 

function array_find($array,$fn) {

	foreach($array as $o) if($fn($o)) return $o;
	return false;
}


function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}


// Worth adding a new product item for various size options :) 
function addToCart($id, $amount, $size) {

	//$_SESSION['cart'] = [];

	$cart = getCart(); 

	$p = array_find($cart,function($o) use($id) { return $o->id==$id;});


	if($p) {
		$p->amount += $amount; 
	} else {
		$_SESSION['cart'][] = (object)[

			"id"=>$id,
			"amount"=>$amount,
			"size"=>$size

		]; 
	}
}

function clearCart() { $_SESSION['cart'] = []; }

function cartItemById($id) {

	return array_find(getCart(),function($o) use($id) {return $o->id==$id;});

}

function makeCartBadge() {

	$cart = getCart(); 

	if(count($cart)==0){
		return ""; 

	} else {
		return "(".array_reduce($cart, function($r,$o){return $r+$o->amount;},0).")"; 

	}
}

function getCartItems() {
	$cart = getCart(); 

	if(empty($cart)) return []; 

	$ids = implode(",", array_map(function($o){return $o->id;},$cart));
	$data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN ($ids)"); 

	return array_map(function($o) use ($cart) {
		$p = cartItemById($o->id);
		$o->amount = $p->amount; 
		$o->total = $p->amount * $o->price; 
		return $o; 
	},$data); 

}

























