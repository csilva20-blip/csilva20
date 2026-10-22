<?php

$Collections = [

    [
        "id" => 0,
        "name" => "Collection 1",
        "image" => "img/unsplash000.jpg"
    ],
    [
        "id" => 1,
        "name" => "Collection 2",
        "image" => "img/unsplash001.jpg"
    ],
    [
        "id" => 2,
        "name" => "Collection 3",
        "image" => "img/unsplash002.jpg"
    ],
        [
        "id" => 4,
        "name" => "Collection 4",
        "image" => "img/unsplash003.jpg"
    ]
];

?>
<div class="grid gap">

	<?php foreach ($Collections as $collection): ?>
		<div class="col-xs-6 col-md-3">
			<figure class="figure collection product-overlay">
				<a href="product_list.php?id=<?= $collection['id'] ?>">
					<img src="<?= $collection['image'] ?>" alt="<?= htmlspecialchars($collection['name']) ?>">
				</a>
				<figcaption><?= htmlspecialchars($collection['name']) ?></figcaption>
			</figure>
		</div>
	<?php endforeach; ?>

</div>

