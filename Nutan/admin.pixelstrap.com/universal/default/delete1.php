<?php
session_start();
include_once('config.php');
    $id=$_GET['id'];
    $sql="DELETE  FROM developer WHERE id='".$id."'"; 
    mysqli_query($link,$sql);
    Header('location:show_dev.php');
    
?>