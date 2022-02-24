<?php

include("conn.php");

$p_id=$_POST['user_id'];

$query="delete from addcart where user_id='{$p_id}'" or die("Query unsucessfull");

    if(mysqli_query($conn,$query))
    {
        $output = array('message'=>'Delete Record SuccessFully');
    }else{
        $output = array('message'=>'fail');
    }
    
    echo json_encode($output);

?>