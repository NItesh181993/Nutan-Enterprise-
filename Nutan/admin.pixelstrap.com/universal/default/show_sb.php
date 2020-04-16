<?php
session_start();
include_once("config.php");
$id =$_GET['id'];
$query1 ="SELECT *FROM sb WHERE id ='".$id."'";
echo $query1;
$query_process = mysqli_query($link,$query1);
                    // echo $query1;
                $result1 = mysqli_fetch_assoc($query_process)
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
<body>
<!--page-wrapper Start-->
<div class="page-wrapper">
    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.php">
                    <img src="../assets/images/final_logo2.png" style="height: 56px;" class="image-dark" alt=""/>
                </a>
            </div>
        </div>
             <ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="exist.php">List of switch board</a></li>
  <li>Add receipe</li>
</ul>
        <div class="main-header-right row">
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="search"  class="form-control-plaintext" placeholder="Search.." >
                                <span class="d-sm-none mobile-search">
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="../assets/images/dashboard/user.png" alt="header-user"/>
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    <?php echo $_SESSION['username']; ?>
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="reset-password.php">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    <i class="icon-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
       <div class="page-sidebar custom-scrollbar">
            <ul class="sidebar-menu">
                <li class="active">
                    <div class="sidebar-title">Dashboard</div>
                    <a href="Create_project.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Create New Project</span>
                    </a>
                    <a href="list_receipe.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>List of Recipes</span>    
                    </a>
            <div class="sidebar-widget text-center">
                <div class="sidebar-widget-top">
                    <h6 class="mb-2 fs-14">Need Help</h6>
                    <i class="icon-bell"></i>
                </div>
                <div class="sidebar-widget-bottom p-20 m-20">
                    <p>+91 8149666052
                        <br>Nutan Enterprise
                        <br><a href="#">Visit FAQ</a>
                    </p>
                </div>
            </div>
        </div>
            <div class="page-body"><br>
        <style>
    * {
          box-sizing: border-box;
          padding-bottom: 0px;
        }
        input[type=text], select, textarea {
          width: 40%;
          padding: 15px;
          padding-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          resize: vertical;
        }
            label {
              padding: 12px 12px 12px 12px;
              display: outline-block;
              font-size: 15px;
              float: left;
            }

            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 10px 10px;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            .btn
            {
                color: white;
                float: right;
            }
            .container 
            { 
            margin-left: 10px;
            border-radius: 20px;
            background-color: #f2f2f2;
            padding: 50px;
            width: 100%;
            }
            </style>
                        
            <div class="container">
            <!-- <form action="#.php"> -->
                <label> switch board name</label>
                <input type="text" id="receipe_name"name="receipe_name" value="<?php echo ($result1['sb_name']) ?>"><br><br>
<style>
 #project
        {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-left: 25px;
        }
    #project td, #project th 
        {
        border: 1px solid #ddd;
        text-align: center;
        padding: 2px;
        }
    #project tr:nth-child(even)
        {
        background-color: #f2f2f2;
        }
    #project tr:hover 
        {
        background-color: #ddd;
        }

    #project th
        {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #a1a1a1;
        color: white;
        }

    .button 
        {
        color: black;
        border: 0px;

        }
    .button:hover 
        {
        background-color: #000;
        color: white;
        }
            </style>

            <div class ="project">
            <table>
                <tbody id="project">
                <th width="2">Sr No.</th>
                <th width="60%"><center>receipe_name </center></th>
                <th width="10%"><center>Rate</center></th>
                <th width="10%"><center>Quantity</center></th>
                <th width="10%"><center>Total amount</center></th>
                <div class="project1">
                <?php
                include_once('config.php');
                $id=$_GET['id'];
                $query = "select * from sb_details where sb_id='".$id."' ";
                $query_process = mysqli_query($link,$query);

                
                while($result = mysqli_fetch_assoc($query_process)){
                // $type= $result['item_type'];
                // $make=$result['make'];
                // $item_name=$result['item_name'];
                // $rate=$result['rate'];
                // $quantity=$result['quantity'];
                // $total=$result['total'];

            $i= 1;
             
 ?>
                
                <tr>
                    <td><?php echo $i ?> </td>
                    <td ><input style="width: 100%; background-color:white" disabled="disabled" type="text"value="<?php echo $result['receipe_name'] ?>"></td>
                    <td><input style="width: 100%; background-color:white" disabled="disabled" type="text" value="<?php echo $result['rate'] ?>"></td>
                    <td><input style="width: 100%; background-color:white" disabled="disabled" type="text"value="<?php echo $result['quantity'] ?>"></td>
                    <td><input style="width: 100%; background-color:white" disabled="disabled" type="text"value="<?php echo $result['total'] ?>"></td>
                </tr>
                    
       <?php   
        } 
         ?>   

                <td></td>
                <td></td>
                <td></td>
                            <td class="text-right"><strong>Grand Total</strong></td>
                            <td><input style="width: 100%; background-color:white" disabled="disabled" type="text"value="<?php echo $result1['total'] ?>"></td>                        </tbody>
                     </table>     
</div>
</head>
</html>