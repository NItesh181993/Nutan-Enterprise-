<?php
include_once("config.php");
// $id=$_GET["id"];
$name=$_POST['name'];
$pid=$_POST['pid'];
// $id = $_GET['id'];
$query1= "SELECT *FROM `sb` where sb_name= '".$name."'";
 $mysqli_query1= mysqli_query($link,$query1);
       // echo $query1;
        if (mysqli_num_rows($mysqli_query1)>0) {
            while ($row1 = mysqli_fetch_assoc($mysqli_query1)) {
              $id=$row1['id'];                          
$receipe_name=$_POST['receipe'];
$rate=$_POST['rate'];
$quantity=$_POST['qty'];
$total=$_POST['total'];
$gtotal =$_POST['gtotal'];
   }}
   $query12= "SELECT id FROM `receipe` where receipe_name= '".$receipe_name."'";
   $mysqli_query12= mysqli_query($link,$query12);
       // echo $query1;
        if (mysqli_num_rows($mysqli_query12)>0) {
            while ($row12 = mysqli_fetch_assoc($mysqli_query12)) {
              $id12=$row12['id'];
              }}                          
 $query2 ="INSERT INTO `sb_details`( 
 `sb_id`, 
 `receipe_name`, 
 `receipe_id`,
 `rate`, 
 `quantity`, 
 `total`)
VALUES('".$id."',
'".$receipe_name."',
'".$id12."',
'".$rate."',
'".$quantity."',
'".$total."')";
echo $query2;
  mysqli_query($link,$query2);
  
  // echo $id;
 $query3="UPDATE `sb` SET `total`='".$gtotal."', p_id='".$pid."' WHERE id= '".$id."'";
 mysqli_query($link,$query3);
 echo $query3;

?>