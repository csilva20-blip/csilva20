<div class="col-xs-12 col-sm-6 col-md-4">
	<figure class="figure product product-overlay">

		<div class="product-media">
			<a href="product_item.php?id=<?= $product['id'] ?>">
				<img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
			</a>
			<a href="cart.php?id=<?= $product['id'] ?>" class="form-button add-to-cart">Add to Cart</a>
		</div>

		<figcaption>
			<div class="caption-body">
				<h4><a href="product_item.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></h4>
				<small class="form-text-helper"><?= $product['desc'] ?></small>
				<div class="product-small">
					<span class="product-size-oz"><?= $product['size'] ?></span>
					<span class="product-price">$<?= $product['price'] ?></span>
				</div>
			</div>
		</figcaption>
		
	</figure>
</div>