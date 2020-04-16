<?php
session_start();
include_once('config.php');
	# code...
    $id=$_GET['id'];
    $sql="DELETE FROM project_details WHERE sbid='".$id."'"; 
    echo $sql;
    mysqli_query($link,$sql);
    Header('location:project_sb.php');
    
?>