<?php

include("header.php");
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Category</li>
            </ol>
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Add Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="category.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Add Menu Items</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="menuitem.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Add Books</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="book.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Add Biography</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="biography.php">Add Now ...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
            <div class="row">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th><?php echo 'Id'; ?></th>
                                <th><?php echo 'Food Name'; ?></th>
                                <th><?php echo 'Food Image'; ?></th>
                                <th><?php echo 'Food Desc'; ?></th>
                                <th><?php echo 'Food Price'; ?></th>
                                <th><?php echo 'Food Rating'; ?></th>
                                <th><?php echo 'Food Delivery'; ?></th>
                                <th><?php echo 'Food Type'; ?></th>
                                <th><?php echo 'Date'; ?></th>
                                <th><?php echo 'Status'; ?></th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th><?php echo 'Id'; ?></th>
                                <th><?php echo 'Food Name'; ?></th>
                                <th><?php echo 'Food Image'; ?></th>
                                <th><?php echo 'Food Desc'; ?></th>
                                <th><?php echo 'Food Price'; ?></th>
                                <th><?php echo 'Food Rating'; ?></th>
                                <th><?php echo 'Food Delivery'; ?></th>
                                <th><?php echo 'Food Type'; ?></th>
                                <th><?php echo 'Date'; ?></th>
                                <th><?php echo 'Status'; ?></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $showcat = "select * from itemmenu order by id desc";
                            $id = 1;
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr>
                                        <td><?php print_r($res['id']); ?></td>
                                        <td><?php print_r($res['name']); ?></td>
                                        <td><?php print_r($res['img']); ?></td>
                                        <td><?php print_r($res['description']); ?></td>
                                        <td><?php print_r($res['price']); ?></td>
                                        <td><?php print_r($res['rating']); ?></td>
                                        <td><?php print_r($res['delivery']); ?></td>
                                        <td><?php print_r($res['type']); ?></td>
                                        <td><?php print_r($res['date']); ?></td>
                                        <td><?php print_r($res['status']); ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include("footer.php"); ?>