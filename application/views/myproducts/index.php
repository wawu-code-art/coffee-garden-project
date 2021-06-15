<div class="container">

    <!-- start tombol search -->
    <div class="row mt-3">
        <div class="col-md-3">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type a word.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end tombol search -->

    <!-- start tombol tambah -->
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>myproducts/tambah" class="btn btn-primary">Add Data Products</a>
        </div>
    </div>
    <!-- end tombol tambah -->

    <!-- start table -->
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($myproducts as $myproduct) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $myproduct['name']; ?></td>
                    <td><?= $myproduct['price']; ?></td>
                    <td><?= $myproduct['image']; ?></td>
                    <td><?= $myproduct['description']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>myproducts/detail/<?= $myproduct['product_id']; ?>" class="badge badge-info float-left">details</a>
                        <br>
                        <a href="<?= base_url(); ?>myproducts/ubah/<?= $myproduct['product_id']; ?>" class="badge badge-success float-left">change</a>
                        <br>
                        <a href="<?= base_url(); ?>myproducts/delete/<?= $myproduct['product_id']; ?>" class="badge badge-danger float-left">delete</a>
                    </td>
            </tr>
            <?php $i = $i + 1; ?>
        <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <!-- end table -->