<?php include_once('section/header.php') ?>
<?php include_once('section/sidebar.php') ?>
<?php include('connect.php') ?>

<?php

$sql = "SELECT * FROM `category` ORDER BY id DESC";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_all($result, MYSQLI_BOTH);
// echo '<pre>';
// print_r($row);
// die;



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="btn btn-primary" href="category-edit-action.php">Add New Category</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tilte</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $ginti = 1;
                                    foreach ($row as $key => $val) :
                                    ?>

                                        <tr>

                                            <td><?php echo $ginti ?></td>
                                            <td><?php echo $val['title'] ?></td>
                                            <td><?php echo $val['description'] ?></td>
                                            <td><img src="<?php echo $val['image']  ?>" style="height: 200px; width:200px"></td>
                                            <td>
                                                <a href="category-edit.php?cat_id=<?php echo $val['id']; ?>"><i class="fa fa-edit"></i></a>
                                                <a href="category-delete.php?cat_id=<?php echo $val['id']; ?>"><i class="fa fa-trash" style="margin-left: 5px;"></i></a>

                                            </td>


                                        </tr>
                                    <?php
                                        $ginti++;
                                    endforeach;
                                    ?>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include_once('section/footer.php') ?>