<?php
include("header.php");

?>
<div id="layoutSidenav_content">
    <?php include("./processpages/menuitem_process.php"); ?>
    <div class="container px-4 ">
        <h1 class="mt-4">Add Menu Item</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Menu Item</li>
        </ol>

        <form method="post" enctype="multipart/form-data">

            <div class="row mb-3 ">
                <div class="col-md-6">
                <span class="text-success my-5"><?php
                                                    if (isset($success)) {
                                                        echo $success;
                                                    }
                                                    ?>
                    </span>
                    <div class="form-floating mb-3 mb-md-0">
                    
                        <input class="form-control" name="itemname" value="<?php
                                                                            if (isset($bioname)) {
                                                                                echo $bioname;
                                                                            } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Menu item Name</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($itemerror['error']['itemname'])) {
                                                            echo $itemerror['error']['itemname'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="Choose Icon" style="margin-bottom:2%;">Choose Menu Item Image </label>
                    <input class="form-control" name="image" type="file" value="<?php
                                                                                if (isset($imgfile_name)) {
                                                                                    echo $imgfile_name;
                                                                                } ?>" />


                    <span class="text-danger my-5"><?php
                                                    if (isset($itemerror['error']['image'])) {
                                                        echo $itemerror['error']['image'];
                                                    } else {
                                                        if (isset($successimg)) {
                                                            echo '<p class="text-success">' . $successimg . '</p>';
                                                        }
                                                    }
                                                    ?>
                    </span>

                </div>

            </div>
            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="itemprice" value="<?php
                                                                                if (isset($itemprice)) {
                                                                                    echo $itemprice;
                                                                                } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Menu Item Price</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($itemerror['error']['itemprice'])) {
                                                            echo $itemerror['error']['itemprice'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="itemrating" value="<?php
                                                                                if (isset($itemrating)) {
                                                                                    echo $itemrating;
                                                                                } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Menu Item Rating in 1.0 to 5.0</label>
                        <span class="text-danger my-5"><?php
                                                        if (isset($itemerror['error']['itemrating'])) {
                                                            echo $itemerror['error']['itemrating'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-select" name="delivery" aria-label="Default select example">
                            <option value="1" selected>Paid Delivery</option>
                            <option value="2">Free Delivery</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Delivery</label>

                    </div>
                    <span class="text-danger my-5"><?php
                                                    if (isset($subcategoryerror['error']['delivery'])) {
                                                        echo $subcategoryerror['error']['delivery'];
                                                    }
                                                    ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option value="1" selected>Regular</option>
                            <option value="2">Special</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Type</label>

                    </div>
                    <span class="text-danger my-5"><?php
                                                    if (isset($subcategoryerror['error']['type'])) {
                                                        echo $subcategoryerror['error']['type'];
                                                    }
                                                    ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option value="1" selected>1</option>
                            <option value="2">0</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Status</label>

                    </div>
                    <span class="text-danger my-5"><?php
                                                    if (isset($subcategoryerror['error']['status'])) {
                                                        echo $subcategoryerror['error']['status'];
                                                    }
                                                    ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" aria-label="With textarea"><?php
                                                                                                    if (isset($biodesc)) {
                                                                                                        echo $biodesc;
                                                                                                    } ?></textarea>

                        </div>
                        <span class="text-danger my-5"><?php
                                                        if (isset($itemerror['error']['desc'])) {
                                                            echo $itemerror['error']['desc'];
                                                        }
                                                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mt-4 mb-0">
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Menu Item">

                    </div>

                </div>

            </div>

        </form>
        <?php
        unset($itemerror['error']);

        ?>

    </div>


    <?php include("footer.php"); ?>