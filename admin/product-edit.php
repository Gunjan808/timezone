<?php include_once('section/header.php') ?>
<?php include_once('section/sidebar.php') ?>
<?php include('connect.php') ?>
<?php

$sql = "SELECT * FROM `brands`";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_all($result, MYSQLI_BOTH);

$sql1 = "SELECT * FROM `category`";
$result1 = mysqli_query($db, $sql1);
$row1 = mysqli_fetch_all($result1, MYSQLI_BOTH);




$pro_id = $_REQUEST['pro_id'];
$sql2 = "SELECT * FROM `product` WHERE id = '$pro_id' ";
$result2  = mysqli_query($db, $sql2);
$row2 = mysqli_fetch_assoc($result2);





?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="product-edit-action.php" role="form" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="pro_id" value="<?php echo $row2['id'] ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="<?php echo $row2['title'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea name="description" placeholder="Enter description" class="form-control" value=""><?php echo $row2['description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile" value="<?php echo $row2['price'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand</label>
                                            <select class="browser-default custom-select" name="brand" required>
                                                <option value="" hidden>Select Category</option>
                                                <?php foreach ($row as $key => $brand) { ?>
                                                    <option value="<?php echo $brand['id'] ?>">
                                                        <?php echo $brand['brand'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category</label>
                                            <select class="browser-default custom-select" name="cat" required>
                                                <option value="" hidden>Select Category</option>
                                                <?php foreach ($row1 as $key => $category) { ?>
                                                    <option value="<?php echo $category['id'] ?>">
                                                        <?php echo $category['title'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" name="phno" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="product_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->



                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include_once('section/footer.php') ?>