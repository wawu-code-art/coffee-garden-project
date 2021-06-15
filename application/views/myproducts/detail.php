<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="..." alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Produk: <?= $myproducts['name']; ?></h5>
                <p class="card-text">Harga: <?= $myproducts['price']; ?></p>
                <p class="card-text"><small class="text-muted">Description: <?= $myproducts['description']; ?></small></p>
            </div>
            <div class="text-center">
                <a href="<?= base_url(); ?>myproducts/index/" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>