<?php
             session_start();
             include_once('config.php');
             $query="SELECT * FROM project";
             $result=mysqli_query($link,$query);
             ?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from admin.pixelstrap.com/universal/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 10:51:20 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/Nlogo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/images/Nlogo.jpg" type="image/x-icon"/>
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

    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">

    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Loader starts -->
<!-- <div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
 --><!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.php">
                    <img src="../assets/images/logo_of_nutun.jpg" class="image-dark" alt=""/>
                </a>
            </div>
        </div>
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
                                    My Account
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-email"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-check-box"></i>
                                    Task
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-comments"></i>
                                    Chat
                                </a>
                            </li>
                            <li>
                                <a href="Logout.php">
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
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
       <div class="page-sidebar custom-scrollbar">
            <ul class="sidebar-menu">
                <li class="active">
                    <div class="sidebar-title">Dashboard</div>
                    <a href="Create_project.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Create New Project</span>
                    </a>
                    <a href="register.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Create User</span>
                    </a>
                    <a href="New_recipes.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>List of Recipes</span>
                    </a>
                    <a href="#" class="sidebar-header">
                        <i class="icon-desktop"></i><span>BOQ</span>
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
        
        <!--Page Sidebar Ends-->
        <!--Page Sidebar Ends-->

<!-- page Body with CSS -->

        <div class="page-body"><br>
            <!-- Container-fluid starts -->
            <style type="text/css">
    #project
        {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
    #project td, #project th 
        {
        border: 1px solid #ddd;
        text-align: center;
        padding: 8px;
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
            
              <table id="project">
                <tr>
                <th width="6%">Sr No.</th>
                <th width="65%"><center>Project List</center></th>
                <th width="3%"><center>Date</center></th>
                <th><center>Action</center></th>
                </tr>
                <?php
                $i = 1;
                if(mysqli_num_rows($result)>0){
                while ($row= mysqli_fetch_assoc($result)){ ?>
                
                <tr>    
                <td><?php echo $i++;?></td>
                <td><?php echo $row['project_name'];?></td>
                <td><?php echo $row['date'];?></td>
                <td>
                    <a href="edit_item.php?id=<?php echo $row['id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add Recipe" style="padding: 7px;">
                        <i class="fa fa-plus"></i></a>
                    <!-- <input type="submit" class="button" value="Add"  onclick="window.location.href='edit_item.php?id='"/>
                    <input type="submit" class="button" value="View" onclick="window.location.href='view_project.php'"/>
                    <input type="submit" class="button" value="Edit">
                    <input type="submit" class="button" value="Delete"> -->
                </td>
                </tr>
                <?php }}?>

                
                         </table>
            </div>
        </div>
        <!--Page Body Ends-->

    <!--Page Body Ends-->

</div>
 <footer class="footer-fix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6 footer-copyright">
                            <p class="mb-0">Nutan Enterprise © 2019 Created By <a href="http://www.fillion.in/" target="_blank">Fillion Solutions Pvt. Ltd.</a></p>
                        </div>
                        <!-- <div class="col-sm-12  col-md-6 col-xl-6">
                            <ul class="footer-links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">T&amp;C</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
</footer>
        </div>
    </div>
</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js" ></script>
<script src="../assets/js/bootstrap/bootstrap.js" ></script>

<!-- Chart JS-->
<!-- <script src="../assets/js/chart/Chart.min.js"></script> -->

<!-- Morris Chart JS-->
<!-- <script src="../assets/js/morris-chart/raphael.js"></script>
<script src="../assets/js/morris-chart/morris.js"></script>
 -->
<!-- owlcarousel js-->
<!-- <script src="../assets/js/owlcarousel/owl.carousel.js" ></script> -->

<!-- Sidebar jquery-->
<!-- <script src="../assets/js/sidebar-menu.js" ></script> -->

<!--Sparkline  Chart JS-->
<!-- <script src="../assets/js/sparkline/sparkline.js"></script> -->

<!--Height Equal Js-->
<!-- <script src="../assets/js/height-equal.js"></script> -->

<!-- prism js -->
<!-- <script src="../assets/js/prism/prism.min.js"></script> -->

<!-- clipboard js -->
<!-- <script src="../assets/js/clipboard/clipboard.min.js" ></script>
 -->
<!-- custom card js  -->
<!-- <script src="../assets/js/custom-card/custom-card.js" ></script>
 -->
<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
<!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
<!-- <script src="../assets/js/chat-sidebar/chat.js"></script> -->
<script src="../assets/js/dashboard-default.js" ></script>

<!-- Counter js-->
<!-- <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>

<script src="../assets/js/notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/notify/index.js"></script>
 -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
</body>

<!-- Mirrored from admin.pixelstrap.com/universal/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 10:53:16 GMT -->
</html>