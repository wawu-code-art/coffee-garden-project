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

    <!-- start table -->
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($ourproducts as $ourproduct) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $ourproduct['productname']; ?></td>
                    <td><?= $ourproduct['price']; ?></td>
                    <td><?= $ourproduct['image']; ?></td>
                    <td><?= $ourproduct['description']; ?></td>
                    <td></td>
                    <td>
                        <a href="<?= base_url(); ?>draftcutsample/scan/<?= $ourproduct['id']; ?>" class="badge badge-success float-left">details</a>
                    </td>
            </tr>
            <?php $i = $i + 1; ?>
        <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <!-- end table -->