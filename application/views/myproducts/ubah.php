<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $myproduct['product_id']; ?>">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $myproduct['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="<?= $myproduct['price']; ?>">
                            <small class="form-text text-danger"><?= form_error('price'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" name="image" class="form-control" id="image" value="<?= $myproduct['image']; ?>">
                            <small class="form-text text-danger"><?= form_error('image'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="<?= $myproduct['description']; ?>">
                            <small class="form-text text-danger"><?= form_error('description'); ?></small>
                        </div>
                        <div>
                            <a href="<?= base_url(); ?>myproducts/index/" class="btn btn-secondary">Back</a>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Change Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>