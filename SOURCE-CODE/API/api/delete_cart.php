<?php

include("conn.php");

$p_id=$_POST['id'];

$query="delete from addcart where id='{$p_id}'" or die("Query unsucessfull");

    if(mysqli_query($conn,$query))
    {
        $output = array('message'=>'Delete Record SuccessFully');
    }else{
        $output = array('message'=>'fail');
    }
    
    echo json_encode($output);

?>