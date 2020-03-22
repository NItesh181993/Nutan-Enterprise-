<?php
include_once("config.php");
$name=$_POST['name'];
$query1= "SELECT `sb_name` FROM `sb` where sb_name ='".$name."'";
 $mysqli_query1= mysqli_query($link,$query1);
       
        if (mysqli_num_rows($mysqli_query1)>0) 
         {  
          $query2 ="SELECT r.id from sb r INNER join sb_details d ON r.id = d.sb_id where r.sb_name = '".$name."'";
            $mysqli_query2= mysqli_query($link,$query2);
            // echo $query2;
       
        if (mysqli_num_rows($mysqli_query2)>0) {
         {
 
                 echo("the switch is already exist and is receipes also exist");
                              }
          }
          else{
            echo("the switch board is already exist but no receipes added");
          }
             
             }
else
{
 $query="INSERT INTO `sb` (`sb_name`)VALUES('".$name."')";
 mysqli_query($link,$query);
 echo ("switch board added succesfully now add items");

}
?>
 