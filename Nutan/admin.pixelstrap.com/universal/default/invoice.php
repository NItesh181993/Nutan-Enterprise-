<?php
session_start();
include_once('config.php');
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon"/>
    <title>Nutan Enterprises</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
            <!-- breadcrum -->
    <link rel="stylesheet" type="text/css" href="../assets/css/breadcrum.css">
    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div class ="project">
            <table class="project">
                <style>
 .project
        {

        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
        margin-left:40px;
        }
    .project td, .project th 
        {
        border: 1px solid #ddd;
        text-align: center;
        padding: 4px;
        }
    .project tr:nth-child(even)
        {
        background-color: #f2f2f2;
        }
    .project tr:hover 
        {
        background-color: #ddd;
        }

    
</style>
<?php
$pid=$_GET["id"]; 
$queryp="SELECT *FROM project Where id='".$pid."' ";
$query_processp= mysqli_query($link,$queryp);
        if(mysqli_num_rows($query_processp)>0){
            while($resultp = mysqli_fetch_assoc($query_processp)){


 ?>
<div class="container">

    <a href="material.php?id=<?php echo $id ;?>"class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="material list " style="padding: 10px; margin-left: 92%">
                      <i class="fa fa-list"></i></a>
    <a href="pdf.php?id=<?php echo $id ;?>"class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="print pdf " style="padding: 10px; margin-left: 0%">
                      <i class="fa fa-file pdf"></i></a>
    
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            <?php echo $resultp["project_name"]; ?><br>
                        </address>
                    </div>
                    <div class="col-xs-6 col-md-6 text-right">
                        <address>
                            <strong>Shipped To:</strong><br>
                            <?php echo $resultp["address"]; ?><br>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <address>
                            <strong>Developer:</strong><br>
                            <?php echo $resultp["developer"]; ?><br><br>
                            
                        </address>
                    </div>
                    <div class="col-xs-6 col-md-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            <?php echo $resultp["Date_Time"]; ?><br><br><br>
                            
                        </address>
                    </div>
                </div>
            </div>
        </div>

<?php
$grand_total=0; 
}}
$query="SELECT sbid FROM project_details WHERE pid='".$id."'";
$query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                $sb_id=$result["sbid"];
          
            
$query1="SELECT sb_name,total FROM sb WHERE id='".$sb_id."'";
$query_process1 = mysqli_query($link,$query1);
        if(mysqli_num_rows($query_process1)>0){
            while($result1 = mysqli_fetch_assoc($query_process1)){
                $sb_name=$result1["sb_name"];
                $total=$result1["total"]
                
 ?>         <tr>
            <th> <?php echo $result1["sb_name"]; ?></th> 
            </tr>
<?php  

                                                                            
                                            
$query12="SELECT receipe_name,receipe_id,quantity,total FROM sb_details WHERE sb_id='".$sb_id."'";
$query_process12 = mysqli_query($link,$query12);
        if(mysqli_num_rows($query_process12)>0){
            while($result12 = mysqli_fetch_assoc($query_process12)){
          $count = $result12["quantity"]
                
          ?>
          <tr>
            <th> <?php echo $result12["receipe_name"]; ?></th>
            <th>Quantity-<?php echo $count ?> </th>
            <th><?php echo $result12["total"] ?></th>
              </tr>  


<?php


$query3="SELECT  total FROM `sb`  WHERE id='".$sb_id."'";
$query_process3 = mysqli_query($link,$query3);

        if(mysqli_num_rows($query_process3)>0){
            while($result3 = mysqli_fetch_assoc($query_process3)){
 ?>
                <?php 
                 $grand_total=$grand_total+$result12["total"];
                 $grand_total1= number_format($grand_total)
                  

                ?>           

<?php
           }}   
           }
       }
   }
           }   } }                                               
             
               ?>
        <tr>
                <th></th> 
                <th>Grand total</th>
                <th><?php echo $grand_total; ?></th>
                           
            </tr>
</table>
</div>
    </head>
    </html>
