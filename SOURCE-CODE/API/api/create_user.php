<?php
include("conn.php");

$user_name=$_POST['name'];
$user_email=$_POST['email'];
$user_phone=$_POST['phone'];
$user_add=$_POST['address'];
$status=$_POST['status'];

$query="insert into user_detail(name,email,phone,address,status) values('{$user_name}','{$user_email}','{$user_phone}','{$user_add}','{$status}')" or die("Query not found");

if(mysqli_query($conn,$query))
{
    $output = array('message'=>'Profile Saved');
}else{
    $output = array('message'=>'fail');
}

echo json_encode($output);
    

?>