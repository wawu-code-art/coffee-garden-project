<div class="container">
    <div class="row row-cols-3">

        <?php foreach ($allproducts as $allproduct) : ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Produk: <?= $allproduct['name']; ?></h5>
                    <p class="card-text">Harga: <?= $allproduct['price']; ?></p>
                    <div class="text-center">
                        <a href="<?= base_url(); ?>allproducts/detail/<?= $allproduct['product_id']; ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>