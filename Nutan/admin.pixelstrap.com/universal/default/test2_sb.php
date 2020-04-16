<?php
include_once("config.php");
$name=$_POST['name'];
$pid=$_POST['pid'];
$query1= "SELECT *FROM `sb` where sb_name= '".$name."'";
 $mysqli_query1= mysqli_query($link,$query1);
        if (mysqli_num_rows($mysqli_query1)>0) {
            while ($row1 = mysqli_fetch_assoc($mysqli_query1)) {
              $id=$row1['id'];                          
                       
               


$query3="INSERT INTO `project_details`  (`pid`, `sbid`,sb_name) VALUES ('".$pid."','".$id."','".$name."')" ;
 mysqli_query($link,$query3);
}}

?>