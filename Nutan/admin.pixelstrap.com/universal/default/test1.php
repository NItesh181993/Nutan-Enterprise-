<?php
include_once("config.php");
$name=$_POST['name'];
$query1= "SELECT *FROM `receipe` where receipe_name= '".$name."'";
 $mysqli_query1= mysqli_query($link,$query1);
       
        if (mysqli_num_rows($mysqli_query1)>0) {
            while ($row1 = mysqli_fetch_assoc($mysqli_query1)) {
              $id=$row1['id'];                          
$item_type=$_POST['item_type'];
$item_name=$_POST['item_name'];
$rate=$_POST['rate'];
$quantity=$_POST['qty'];
$total=$_POST['total'];
$gtotal =$_POST['gtotal'];
   }}
 $query2="INSERT INTO `receipe_details` (
 `receipe_id`,
 `item_type`,
 `item_name`,
 `rate`,
 `quantity`,
 `total`
)
VALUES('".$id."',
'".$item_type."',
'".$item_name."',
'".$rate."',
'".$quantity."',
'".$total."')";
  mysqli_query($link,$query2);
  

 $query3="UPDATE `receipe` SET `grand_total`='".$gtotal."' WHERE id='".$id."'";
 mysqli_query($link,$query3);
 echo "receipe added succesfully";
?>