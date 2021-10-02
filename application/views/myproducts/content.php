<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <!-- <form action="" method="" enctype="multipart/form-data"> -->
            <?= form_open_multipart('admin/edit'); ?>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">Logo</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="email" class="form-control" name="email" value="">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">Home Text</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="name" class="form-control" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">Home Image</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="name" class="form-control" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">About Us Text</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="name" class="form-control" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">About Us Image</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="name" class="form-control" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end mb-3">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>


            <!-- </form> -->

        </div>
    </div>

</div>