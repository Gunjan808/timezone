<?php include_once('section/header.php') ?>
<?php include_once('section/sidebar.php') ?>
<?php include('connect.php') ?>

<?php

$sql = "SELECT * FROM brands ORDER BY id DESC";
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
                    <h1>Brand List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="btn btn-primary" href="brand-add.php">Add New Brand</a>
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
                            <h3 class="card-title">Brand Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tilte</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $ginti = 1;
                                    foreach ($row as $key => $val) :
                                    ?>

                                        <tr>

                                            <td><?php echo $ginti ?></td>
                                            <td><?php echo $val['brand'] ?></td>
                                          

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