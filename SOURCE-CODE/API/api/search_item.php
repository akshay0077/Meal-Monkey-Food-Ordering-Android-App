<?php

include("conn.php");

$user_name=$_POST['name'];

$query="SELECT * FROM itemmenu where name='$user_name' ";

$result= mysqli_query($conn,$query)or die ("SQL Query Failed");


if(mysqli_num_rows($result)> 0){
	$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	
}else{
	// $output["message"] = "No data found";
	$output =array (0 => array ('message' => 'No data found',),);
}
echo json_encode($output);

?>
