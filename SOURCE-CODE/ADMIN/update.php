
<?php

include("./include/config.php");
include("./processpages/update_process.php");
if(isset($_GET['cid']))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Category </h1>
 </div><br>

 <label> Category Name: </label>
 <input type="text" name="catname" class="form-control"> <br>
 <span class="text-danger my-3">
    <?php 
    if(isset($categoryerror['error']['catname']))
    {
        echo $categoryerror['error']['catname'] ;
    }
    ?>
 </span>
 <span class="text-success">
    <?php 
    if(isset($successupdate))
    {
        echo $successupdate ;
    }
    ?>
 </span>


 <button class="btn btn-success" type="submit" name="submit"> Edit Category </button><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php } 
elseif(isset($_GET['scid']))
{
    $showcat = "select * from itemmenu where id = '$scid'";
           
    $q = mysqli_query($con, $showcat);
    if ($q) {
        while ($res = mysqli_fetch_assoc($q)) { 
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<!-- <div class="col-lg-6 m-auto">
<form method="post" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark"> -->
 <h1 class="text-black ">  Update MenuItems </h1>
 </div><br>
                    
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
                                                                    echo $res['name'];
                                                                 ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
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
                                                                     echo $res['price']; ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
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
                                                                    echo $res['rating']; ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
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
                <option value="0">0</option>
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

<!-- </form> -->
 

 <!-- <button class="btn btn-success" type="submit" name="submit"> Edit SubCategory </button><br> -->

 </div>
 </form>
 </div>
</body>
</html>

<?php
        }
        }
}
?>

