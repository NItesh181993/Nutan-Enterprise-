<?php
include_once("config.php");
$name=$_POST['name'];
$query1= "SELECT `receipe_name` FROM `receipe` where receipe_name ='".$name."'";
 $mysqli_query1= mysqli_query($link,$query1);
       
        if (mysqli_num_rows($mysqli_query1)>0) 
         {  
          $query2 ="SELECT r.id,r.receipe_name from receipe r INNER join receipe_details d ON r.id = d.receipe_id where r.receipe_name = '".$name."'";
            $mysqli_query2= mysqli_query($link,$query2);
       
        if (mysqli_num_rows($mysqli_query2)>0) {
         {
 
                 echo("the receipe is already exist and is also exist");
                              }
          }
          else{
            echo("the receipe is already exist but no items added");
          }
             
             }
else
{
 $query="INSERT INTO `receipe` (`receipe_name`)VALUES('".$name."')";
 mysqli_query($link,$query);
 echo ("receipe added succesfully now add items");

}
?>
 