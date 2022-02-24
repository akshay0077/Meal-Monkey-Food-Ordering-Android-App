<?php
include("./include/config.php");
extract($_POST);
$itemerror = array();
if (isset($_POST['submit'])) {

    // validation For  Book Name

    if (empty($_POST['itemname'])) {
        $itemerror['error']['itemname'] = "please enter Item name";
    } else {
        $bioname = $_POST['itemname'];
        $checkbio = "select * from itemmenu where name = '$bioname'";
        $q = mysqli_query($con, $checkbio);
        $biocount = mysqli_num_rows($q);
        if ($biocount > 0) {
            $itemerror['error']['itemname'] = "Already Menu Item exists";
        }
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
               
                $insertbiography = "insert into itemmenu ( name ,img, description , price , rating,delivery,type,status ) values ('$bioname' ,'$img_name', '$biodesc' , '$itemprice' , '$itemrating', '$delivery', '$type', '$status')";
                mysqli_query($con , $insertbiography);
                unset($bioname);
                unset($itemprice);
                unset($itemrating);
                unset($biodesc);
                move_uploaded_file($file_path, 'images/menuitem/'.$img_name);
                    $successimg = "Sucessfully added image";
                $success = "Sucessfully added Menu Item";
            }

  
}

?>
