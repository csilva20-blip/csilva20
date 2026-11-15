<?php

function productsListTemplate($r,$o) {
	return $r.<<<HTML

		<div class="col-xs-12 col-md-4">
			<figure class="figure product product-overlay ratio-4-5 display-flex flex-column">
				<div class="product-media flex-none">
					<a href="product_item.php?id=$o->id"><img src="img/$o->thumb_image_url" alt=""></a>

					<button type="button" class="form-button add-to-cart" >Add to cart</button>
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
       



function cartListTemplate($r, $o) {
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
            <label class="form-label" for="qty-$o->id">Quantity</label>
            <input class="form-input" id="qty-$o->id" type="number" min="1" value="1">
        </td>

        <td>&dollar;$o->price</td>
    </tr>

    HTML;
}
