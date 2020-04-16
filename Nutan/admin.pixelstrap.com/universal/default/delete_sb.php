<?php
session_start();
include_once('config.php');
	# code...
    $id=$_GET['id'];
    $sql="DELETE FROM sb WHERE id=$id"; 
    mysqli_query($link,$sql);
    $sql1="DELETE FROM sb_details WHERE sb_id=$id";
    mysqli_query($link,$sql1);
    Header('location:exist.php');
    
?>