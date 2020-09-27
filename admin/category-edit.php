<?php include_once('section/header.php') ?>
<?php include_once('section/sidebar.php') ?>
<?php include('connect.php') ?>
<?php
$cat_id = $_REQUEST['cat_id'];
$sql = "SELECT * FROM `category` WHERE id = '$cat_id' ";
$result  = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Add</h1>
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
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="category-add-action.php" role="form" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="cat_id" value="<?php $row['id'] ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="<?php echo $row['title'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea name="description" placeholder="Enter description" class="form-control"><?php echo $row['description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <div class="form-group">
                                            <label for="exampleInputEmail1">Mobile</label>
                                            <input type="number" name="phno" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="cat_img">
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