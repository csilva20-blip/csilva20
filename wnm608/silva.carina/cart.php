<?php

include_once "lib/php/functions.php";
include_once "sections/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

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
                <?= array_reduce($cart, 'cartListTemplate', '') ?>
            </tbody>
        </table>

      </div>
    </div>
    <div class="col-xs-12 col-md-5">
      <div class="card flat">
        <h2>Order summary</h2>

        <div class="card-section display-flex">
          <div class="flex-stretch"><strong>Sub Total</strong></div>
          <div class="flex-none">&dollar;3.50</div>
        </div>
        <div class="card-section display-flex">
          <div class="flex-stretch"><strong>Shipping</strong></div>
          <div class="flex-none">&dollar;3.50</div>
        </div>
        <div class="card-section display-flex">
          <div class="flex-stretch"><strong>Tax</strong></div>
          <div class="flex-none">&dollar;3.50</div>
        </div>
        <div class="card-section display-flex">
          <div class="flex-stretch"><strong>Total</strong></div>
          <div class="flex-none">&dollar;3.50</div>
        </div>
        <div class="card-section">
          <a href="checkout.php" class="form-button">checkout</a>
        </div>

      </div>
      
    </div>

  </div>
  
</div>


</body>
</html>