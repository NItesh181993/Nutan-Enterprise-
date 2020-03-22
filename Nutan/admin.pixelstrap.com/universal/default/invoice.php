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
        margin-left: 25px;
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
$query="SELECT sb_name,id FROM sb WHERE p_id='".$id."'";
$query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                $sb_id=$result["id"];
                
 ?>         <tr>
            <th> <?php echo $result["sb_name"]; ?></th>
            </tr>
<?php  

$query1="SELECT receipe_name,receipe_id FROM sb_details WHERE sb_id='".$sb_id."'";
$query_process1 = mysqli_query($link,$query1);
        if(mysqli_num_rows($query_process1)>0){
            while($result1 = mysqli_fetch_assoc($query_process1)){
 ?>
            <th> <?php echo $result1["receipe_name"]; ?></th>
                <tr>
                <th>item_type</th>
                <th>make</th>
                <th>item_name</th>
                <th>rate</th>
                <th>quantity</th>
                <th>total</th>
            </tr>
<?php
$id_id=$result1["receipe_id"];

$query2="SELECT  `item_type`, `make`, `item_name`, `rate`, `quantity`, `total` FROM `receipe_details`  WHERE receipe_id='".$id_id."'";
$query_process2 = mysqli_query($link,$query2);
        if(mysqli_num_rows($query_process2)>0){
            while($result2 = mysqli_fetch_assoc($query_process2)){
 ?>
            <tr>
                <th><?php echo $result2["item_type"]; ?></th>
                <th><?php echo $result2["make"]; ?></th>
                <th><?php echo $result2["item_name"]; ?></th>
                <th><?php echo $result2["rate"]; ?></th>
                <th><?php echo $result2["quantity"]; ?></th>
                <th><?php echo $result2["total"]; ?></th>
            </tr>

<?php
} } } } } }  ?>
</table>
</div>
    </head>
    </html>