<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="base_url()/assets/img/<?= $allproducts['image']; ?>" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Produk: <?= $allproducts['name']; ?></h5>
                <p class="card-text">Harga: <?= $allproducts['price']; ?></p>
                <p class="card-text"><small class="text-muted">Description: <?= $allproducts['description']; ?></small></p>
            </div>
            <div class="text-center">
                <a href="<?= base_url(); ?>allproducts/index/" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>