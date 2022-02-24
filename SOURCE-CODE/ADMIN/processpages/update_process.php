<?php


if(isset($_GET['cid']))
{

    extract($_POST);
    $cid = $_GET['cid'];
    $categoryerror = array();
    if (isset($_POST['submit'])) {
        if (empty($_POST['catname'])) {
            $categoryerror['error']['catname'] = "please enter category name";
        } else {
            $catname = $_POST['catname'];
    
            $showcat = "select * from cat where id = '$cid'";
           
            $q = mysqli_query($con, $showcat);
            if ($q) {
                while ($res = mysqli_fetch_assoc($q)) { 
              
                       $imgname = $res['img']; 
                       $img_ex = substr($imgname, -4);
    
                       date_default_timezone_set("Asia/Calcutta");  
    
                       $time = date("Y-m-d H:i:s");
                    //    if($img_ex == 'JPEG')
                    //    {
                           $img = $catname.'.'.$img_ex;
                    //    }else{
                    //        $img = $catname.$img_ex;
                    //    }
                    //    $img = $catname.$img_ex;
                }
            }
          
    
    
     $updatecat = "update cat set name='$catname',date='$time',img='$img' where id='$cid'";
                       mysqli_query($con, $updatecat);
                       $successupdate = "Update Successfully ";
                           header('location:tables.php');
                           unset($catname);
                       
                           unset($successupdate);
            
        }
    }
}

elseif (isset($_GET['scid'])) {
    $scid = $_GET['scid'];
    extract($_POST);
$itemerror = array();
        
    // $updatesubcat = "update itemmenu set name='$selectsubcat',sub_cat_name='$subcatname',sub_cat_time='$time',sub_cat_img='$img' where sub_cat_id='$scid'";
    //                   mysqli_query($con, $updatesubcat);
    //                   $successupdate = "Update Successfully ";
    //                       header('location:tables.php');
    //                       unset($subcatname);
                      
    //                       unset($successupdate);
              
    //                      } 
                    
                    
                    if (isset($_POST['submit'])) {

                        // validation For  Book Name
                    
                        if (empty($_POST['itemname'])) {
                            $itemerror['error']['itemname'] = "please enter Item name";
                        } else {
                            $bioname = $_POST['itemname'];
                            // $checkbio = "select * from itemmenu where name = '$bioname'";
                            // $q = mysqli_query($con, $checkbio);
                            // $biocount = mysqli_num_rows($q);
                            // if ($biocount > 0) {
                            //     $itemerror['error']['itemname'] = "Already Menu Item exists";
                            // }
                        }
                    
                        if (empty($_POST['itemprice'])) {
                            $itemerror['error']['itemprice'] = "please enter Item Price";
                        } else {
                            $itemprice = $_POST['itemprice'];
                        }
                    
                        if (empty($_POST['itemrating'])) {
                            $itemerror['error']['itemrating'] = "please enter Item Rating";
                        } else {
                            $itemrating = $_POST['itemrating'];
                        }
                    
                        if (empty($_POST['delivery'])) {
                            $itemerror['error']['delivery'] = "please enter Item Delivery";
                        } else {
                            $delivery = $_POST['delivery'];
                            if($delivery == 2)
                            {
                                $delivery ='Free Delivery';
                            }else{
                                $delivery ='Paid Delivery';
                            }
                        }
                    
                        if (empty($_POST['type'])) {
                            $itemerror['error']['type'] = "please enter Item Type";
                        } else {
                            $type = $_POST['type'];
                            if($type == 2)
                            {
                             
                                $type ='Special';
                            }else{
                                $type ='Regular';
                            }
                        }
                    
                        if (empty($_POST['status'])) {
                            $itemerror['error']['status'] = "please enter Item Status";
                        } else {
                            $status = $_POST['status'];
                        }
                    
                    
                    
                        // validation For Book Images
                    
                        if (isset($_FILES['image']['name'])) {
                    
                            $imgfile_name = $_FILES['image']['name'];
                            $file_path = $_FILES['image']['tmp_name'];
                            $file_type = $_FILES['image']['type'];
                            $file_size = $_FILES['image']['size'];
                            $file_ex = strtolower(substr($imgfile_name, -4));
                            if (empty($_FILES['image']['name'])) {
                                    $itemerror['error']['image'] = "please select Menu Item Image";
                                
                            } else {
                                if ($file_ex == '.jpg' || $file_ex == 'jpeg' || $file_ex == '.png') {
                                    if (empty($itemerror['error']['image'])) {
                                        // $img_name = date("Y-m-d_H:i:s") .'_';
                                        if( $file_ex == 'jpeg')
                                        {
                                            $img_name = $bioname . '.' . $file_ex;
                                        }
                                        else{
                                            $img_name = $bioname . '' . $file_ex;
                                        }
                                        // move_uploaded_file($file_path, 'upload/subcategory/'.$img_name);
                                        
                                        
                                    }
                                } else {
                                    $itemerror['error']['image'] = "Please Select Image formet of Jpg , Jpeg or png.";
                                }
                            }
                        }
                            
                            // if ($file_size > 1024 * 1024 * 5) {
                            //     $error = "please select 5 mb pdf";
                            // }
                    
                            if(empty($_POST['desc']))
                            {
                                $itemerror['error']['desc'] = "please enter Menu Item discription";
                            }
                            else{
                    
                                if(strlen($_POST['desc']) < 300)
                                {
                                    $biodesc = $_POST['desc'];
                                }else{
                    
                                    $itemerror['error']['desc'] = "please Enter Less than 200 Charecter ";
                                }
                            }
                                if(empty($itemerror['error']))
                                {
                                   
                                    $update = "update itemmenu set name ='$bioname',img = '$img_name', description = '$biodesc' , price ='$itemprice', rating = '$itemrating',delivery = '$delivery',type = '$type',status ='$status' where id='$scid'";
                                    mysqli_query($con , $update);
                                    unset($bioname);
                                    unset($itemprice);
                                    unset($itemrating);
                                    unset($biodesc);
                                    move_uploaded_file($file_path, 'images/menuitem/'.$img_name);
                                        $successimg = "Sucessfully added image";
                                        
                                    $success = "Sucessfully Update Menu Item";
                                    header('location:tables.php');
                                }
                    
                            }
  
       
    

                }