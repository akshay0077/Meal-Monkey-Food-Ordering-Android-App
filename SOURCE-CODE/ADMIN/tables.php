<?php
include("header.php");
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
            

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ Category Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Category Status</th>
                                <th>Category Time</th>
                                <th>Edit</th>
                                <th>Delete</th>

                        </tr>
                        <?php
                            $showcat = "select * from cat order by id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['id']); ?></td>
                                        <td><?php print_r($res['name']); ?></td>
                                        <td><?php print_r($res['img']); ?></td>
                                        <td><?php print_r($res['status']); ?></td>
                                        <td><?php print_r($res['date']); ?></td>
                                        <td>
                                        <a href="update.php?cid=<?php print_r($res['id']); ?>" class="btn bg-success text-white"><i class="fa fa-pen-square"></i> Edit</a>
                                        </td>
                                        <td>    
                                        <a href="delete.php?cid=<?php print_r($res['id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>
            


            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ MenuItem Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Rating</th>
                                <th>Delivery</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                        </tr>
                        <?php
                            $showcat = "select * from itemmenu order by id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
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
                                        
                                        <td>
                                        <a href="update.php?scid=<?php print_r($res['id']); ?>" class="btn bg-success text-white"><i class="fa fa-pen-square"></i> Edit</a>
                                        </td>
                                        <td>    
                                        <a href="delete.php?scid=<?php print_r($res['id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ User Cart Details Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Id</th>
                                <th>User Id</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Food Name</th>
                                <th>Food Image</th>
                                <th>Date</th>
                                <th>Delete</th>
                        </tr>
                        <?php
                            $showcat = "select * from addcart order by id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['id']); ?></td>
                                        <td><?php print_r($res['user_id']); ?></td>
                                        <td><?php print_r($res['quantity']); ?></td>
                                        <td><?php print_r($res['total_price']); ?></td>
                                        <td><?php print_r($res['food_name']); ?></td>
                                        <td><?php print_r($res['food_img']); ?></td>
                                        <td><?php print_r($res['date']); ?></td>
                                        
                                        <td>    
                                        <a href="delete.php?ucid=<?php print_r($res['id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ User Details Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Delete</th>
                        </tr>
                        <?php
                            $showcat = "select * from user_detail order by id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['id']); ?></td>
                                        <td><?php print_r($res['name']); ?></td>
                                        <td><?php print_r($res['email']); ?></td>
                                        <td><?php print_r($res['phone']); ?></td>
                                        <td><?php print_r($res['address']); ?></td>
                                        <td><?php print_r($res['date']); ?></td>
                                        <td><?php print_r($res['status']); ?></td>
                                        
                                        <td>    
                                        <a href="delete.php?ruid=<?php print_r($res['id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

            <div class="conatiner">
                <div class="col-lg-12">
                    <h3 class=" m-4 text-center">❀ Admin Details Table ❀</h3>

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <tr class="text-center">
                                <th>Id</th>
                                <th>Admin Name</th>
                                <th>Admin Email</th>
                                <th>Admin Password</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Delete</th>
                        </tr>
                        <?php
                            $showcat = "select * from admin order by id desc";
                            $q = mysqli_query($con, $showcat);
                            if ($q) {
                                while ($res = mysqli_fetch_assoc($q)) { ?>
                                    <tr class="text-center">
                                        <td><?php print_r($res['id']); ?></td>
                                        <td><?php print_r($res['name']); ?></td>
                                        <td><?php print_r($res['email']); ?></td>
                                        <td><?php print_r($res['password']); ?></td>
                                        <td><?php print_r($res['time']); ?></td>
                                        <td><?php print_r($res['status']); ?></td>
                                        <td>    
                                        <a href="delete.php?raid=<?php print_r($res['id']); ?>" class="btn bg-danger text-white"><i class="fa fa-trash"></i> Delete</a>  
                                        
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                    </table>

                </div>

            </div>

        </div>
    </main>

    <?php include("footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    </body>

    </html>