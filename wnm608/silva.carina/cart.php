<?php

include_once "lib/php/functions.php";
include_once "sections/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart</title>

  <?php include "sections/meta.php"; ?>
</head>


<body>
  <?php include "sections/navbar.php"; ?>
  

<div class="container">
  <h2>Your cart</h2>
  <div class="grid gap">
    <div class="col-xs-12 col-md-7">


      <div class="card">
        <table class="table lined horizontal">
            <thead>
                <tr>
                    <th colspan="2">Item</th>
                    <th>Size</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>

            <tbody>
                <?= array_reduce($cart_items, 'cartListTemplate', '') ?>
            </tbody>
        </table>

      </div>
    </div>
    <div class="col-xs-12 col-md-5">
      <div class="card flat">
        <h2>Order summary</h2>

        <?= cartTotals() ?>

      </div>
      
    </div>

  </div>
  
</div>


</body>
</html>