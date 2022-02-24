<?php 
include ("./include/config.php");
$cid = $_GET['cid'];
$scid = $_GET['scid'];
$ruid = $_GET['ruid'];
$raid = $_GET['raid'];
$ucid = $_GET['ucid'];


$dlt = "delete from cat where id='$cid' ";
mysqli_query($con , $dlt);

$dltsc = "delete from itemmenu where id='$scid' ";
mysqli_query($con , $dltsc);


$dltru = "delete from user_detail where id='$ruid' ";
mysqli_query($con , $dltru);

$dltruu = "delete from addcart where id='$ucid' ";
mysqli_query($con , $dltruu);

$dltra = "delete from admin where id='$raid' ";
mysqli_query($con , $dltra);

header("location: tables.php");

?>
