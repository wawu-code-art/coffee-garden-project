<?php
// cek apakah tombol sumbit sudah ditekan atau belum
// if (isset($_POST["submit"])) {
//     var_dump($_POST);
//     var_dump($_FILES);
//     die;
// }
?>

<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="<?= set_value('price'); ?>">
                            <small class="form-text text-danger"><?= form_error('price'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                            <!-- <small class="form-text text-danger"><?= form_error('image'); ?></small> -->
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="<?= set_value('description'); ?>">
                            <small class="form-text text-danger"><?= form_error('description'); ?></small>
                        </div>
                        <div>
                            <a href="<?= base_url(); ?>myproducts/index/" class="btn btn-secondary">Back</a>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Add Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>