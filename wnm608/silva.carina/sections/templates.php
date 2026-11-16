<?php

function productsListTemplate($r,$o) {
	return $r.<<<HTML

		<div class="col-xs-12 col-md-4">
			<figure class="figure product product-overlay ratio-4-5 display-flex flex-column">
				<div class="product-media flex-none">
					<a href="product_item.php?id=$o->id"><img src="img/$o->thumb_image_url" alt=""></a>

					<form method="post" action="cart_actions.php?action=add-to-cart">
						<input type="hidden" name="product-id" value="$o->id">
						<input type="hidden" name="product-amount" value="1">
						<input type="hidden" name="product-size" value="$o->size">
						<button type="submit" class="form-button add-to-cart">Add to cart</button>
					</form>
				</div>
				<figcaption class="flex-stretch display-flex flex-column">
					<div class="caption-body flex-stretch display-flex flex-column">
						<h4>$o->title</h4>

						<div class="product-small">
							<span class="product-size-oz">$o->size</span>
							<span class="product-price">&dollar;$o->price</span>
						</div>
					</div>
				</figcaption>
			</figure>
		</div>

	HTML;
}
       

  
  // function selectAmount($amount=1, $total=10) {
  //     $output = "<select name='amount' class='form-input'>";

  //     for($i=1; $i<=$total; $i++) {
  //         $output .= "<option ".($i==$amount ? "selected" : "").">$i</option>";
  //     }

  //     $output .= "</select>";

  //     return $output;
  // }
   



function cartListTemplate($r, $o) {
	$totalfixed = number_format($o->total,2,'.','');
	//$selectAmount = selectAmount($o->amount);

    return $r.<<<HTML

    <tr>
        <td>
            <figure class="figure images-thumbs">
                <img src="img/$o->thumb_image_url" alt="$o->title">
            </figure>
        </td>
        <td>
            <a href="product_item.php?id=$o->id">$o->title</a>
        </td>

        <td>$o->size</td>

        <td>
        	<form action="cart_actions.php?action=update-cart-item" method="post">
        	    <input type="hidden" name="product-id" value="$o->id">
        	    <label class="form-label" for="qty-$o->id">Quantity</label>
        	    <input
        	        type="number" name="amount" class="form-input" id="qty-$o->id" min="0" step="1" value="$o->amount" onchange="this.form.submit()">
        	    </form>
        </td>
        <td>&dollar;$totalfixed</td>
    </tr>

    HTML;
}

function cartTotals() {
	$cart = getCartItems();
	$cartprice = array_reduce($cart, function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.081,2,'.','');
	$taxedfixed = number_format($cartprice*1.081,2,'.','');

	$fixedplusshipping = number_format($taxedfixed + 10.50, 2, '.', '');



	return <<<HTML
		<div class="card-section display-flex">
		  <div class="flex-stretch"><strong>Sub Total</strong></div>
		  <div class="flex-none">&dollar;$pricefixed</div>
		</div>
		<div class="card-section display-flex">
		  <div class="flex-stretch"><strong>Shipping</strong></div>
		  <div class="flex-none">&dollar;10.50</div>
		</div>
		<div class="card-section display-flex">
		  <div class="flex-stretch"><strong>Tax</strong></div>
		  <div class="flex-none">&dollar;$taxfixed</div>
		</div>
		<div class="card-section display-flex">
		  <div class="flex-stretch"><strong>Total</strong></div>
		  <div class="flex-none">&dollar;$fixedplusshipping</div>
		</div>
		<div class="card-section">
		  <a href="checkout.php" class="form-button">checkout</a>
		</div>


	HTML; 
}






