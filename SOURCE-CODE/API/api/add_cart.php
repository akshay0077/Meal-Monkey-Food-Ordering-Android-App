<?php
include("conn.php");

$user_id = $_POST['user_id'];
$quantity=$_POST['quantity'];
$total_price=$_POST['total_price'];
$food_name=$_POST['food_name'];
$food_img=$_POST['food_img'];


$query="insert into addcart(user_id,quantity,total_price,food_name,food_img) values('{$user_id}','{$quantity}','{$total_price}','{$food_name}','{$food_img}')";

if(mysqli_query($conn,$query))
{
    $output = array('message'=>'Order Add To Cart');
}else{
    $output = array('message'=>'fail');
}

echo json_encode($output);
    

?>
