<?php
include("conn.php");

$user_id = $_POST['id'];
$quantity=$_POST['quantity'];
$total_price=$_POST['total_price'];
$food_name=$_POST['food_name'];
$food_img=$_POST['food_img'];


$query="update addcart set quantity='$quantity',total_price='$total_price',food_name='$food_name',food_img='$food_img' where id='$user_id'";

if(mysqli_query($conn,$query))
{
    $output = array('message'=>'Order Updated');
}else{
    $output = array('message'=>'fail');
}

echo json_encode($output);
    

?>
