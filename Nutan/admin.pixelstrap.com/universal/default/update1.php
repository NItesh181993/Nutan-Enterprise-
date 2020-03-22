<?php
session_start();
include_once("config.php");
 $id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$query1= "UPDATE developer SET developer_name = '".$name."', address ='".$address."',contact ='".$contact."' WHERE id ='".$id."'";
mysqli_query($link,$query1);
echo "data update successfully";
?>