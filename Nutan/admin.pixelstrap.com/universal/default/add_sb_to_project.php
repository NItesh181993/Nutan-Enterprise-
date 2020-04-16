<?php
$pid=$_GET["pid"];
$id=$_GET['id'];
include_once("config.php");
$query="SELECT *FROM sb WHERE id='".$id."'";
$query_process= mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                $sb_name=$result["sb_name"];
            
$query1="INSERT INTO `project_details`( `pid`, `sbid`, `sb_name`) VALUES 
(
    '".$pid."',
    '".$id."',
    '".$sb_name."'
)";
mysqli_query($link,$query1);
	# code...

                echo "<script>alert('switch board Added Successfully ..!');
                    window.location.href = 'index.php';
                    </script>";
                
}}
?>