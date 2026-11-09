<?php

function productsListTemplate($r,$o) {
	return $r.<<<HTML

	<div class="col-xs-12 col-md-4">
		<figure class="figure product product-overlay ratio-4-5 display-flex flex-column">
			<div class="product-media flex-none">
				<img src="img/$o->thumb_image_url" alt="">
				<button type="button" class="form-button add-to-cart">Add to cart</button>
			</div>
			<figcaption class="flex-stretch display-flex flex-column">
				<div class="caption-body flex-stretch display-flex flex-column">
					<h4>$o->title</h4>

					<!-- <small class="form-text-helper flex-stretch" style="">$o->description</small> -->
					
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