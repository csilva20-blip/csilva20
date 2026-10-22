<div class="grid gap">

	<?php foreach ($featuredProducts as $featuredProduct): ?>


	<div class="col-xs-12 col-sm-6 col-md-4">
		<figure class="figure product product-overlay">
			<div class="product-media">

				<a href="product_item.php?id=<?= $featuredProduct['id'] ?>"><img src="<?= $featuredProduct['image'] ?>" alt=""></a>


				<button type="button" class="form-button add-to-cart">Add to cart</button>
			</div>
			<figcaption>
				<div class="caption-body">
					<h4>

						<a href="product_item.html"><?= htmlspecialchars($featuredProduct['name']) ?></a>

					</h4>
					<small class="form-text-helper"><?= htmlspecialchars($featuredProduct['name']) ?></small>
					<div class="product-small"><span class="product-size-oz"><?= htmlspecialchars($featuredProduct['name']) ?></span><span class="product-price"><?= htmlspecialchars($featuredProduct['name']) ?></span></div>
				</div>
			</figcaption>
		</figure>
	</div>

	<?php endforeach; ?>

</div>