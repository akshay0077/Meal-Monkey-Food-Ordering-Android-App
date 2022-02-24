<?php

include("conn.php");

$user_email=$_POST['email'];
$user_phone=$_POST['phone'];


$query="SELECT * FROM user_detail where email = '$user_email' and phone = '$user_phone' ";

$result= mysqli_query($conn,$query)or die ("SQL Query Failed");


if(mysqli_num_rows($result)> 0){
	$output=mysqli_fetch_object($result);
	
}else{
	// $output["message"] = "No data found";
	$output = array('message'=>'fail');
}
echo json_encode($output);

?>
