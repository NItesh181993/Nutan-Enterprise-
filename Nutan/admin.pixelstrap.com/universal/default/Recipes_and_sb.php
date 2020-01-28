<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<!-- Mirrored from admin.pixelstrap.com/universal/default/megaoptions.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:12:19 GMT -->
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
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index-2.html">
                    <img src="../assets/images/logo_of_nutun.png" class="image-dark" alt=""/>
                    <img src="../assets/images/logo_of_nutun.png" class="image-light" alt=""/>
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
                            <img class="pull-right mr-2" src="../assets/images/dashboard/user.png" alt="header-user"/>
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    <?php echo $_SESSION['username']; ?>
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


    <div class="page-body-wrapper">

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
        <!--Page Sidebar End-->

        <div class="page-body">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Mega options
                                <small>Universal Admin panel</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">BOQ</li>
                                <!-- <li class="breadcrumb-item">Form Controls</li>
                                <li class="breadcrumb-item active">Mega Options</li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-xl-6">
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Add Recipes</h5>
                                <!-- <span>For Create inline megaoption add <code>.mega-horizontal</code> class in form tag</span> -->
                            </div>
                            <div class="card-body">
                                <form class="mega-horizontal">
                                    <div class="row">
                                        <!-- <div class="col-sm-3">
                                            <p class="mega-title">Recipe 1</p>
                                        </div> -->
                                        <div class="col-sm-11">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-primary mr-3">
                                                        <input type="radio" name="radio1" id="radio30" value="option1">
                                                        <label for="radio30"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Recipe 1<span class="badge badge-primary pull-right digits">608 INR</span></h6>
                                                        <p>Estimated 5 Day Shipping ( Duties end tax may be due upon delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-secondary mr-3">
                                                        <input type="radio" name="radio1" id="radio31" value="option1">
                                                        <label for="radio31"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Fast <span class="badge badge-secondary pull-right digits">100 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due upon delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="mega-title">Buying Option</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="radio radio-success mr-3">
                                                        <input type="radio" name="radio1" id="radio32" value="option1">
                                                        <label for="radio32"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">XYZ Seller<span class="badge badge-success pull-right digits">250 INR</span></h6>
                                                        <p class="rating-star-wrapper"><i class="icofont icofont-star txt-warning "></i><i class="icofont icofont-star txt-warning "></i><i class="icofont icofont-star txt-warning "></i><i class="icofont icofont-star txt-warning "></i><i class="icofont icofont-star txt-warning  m-r-5"></i>5 start rating</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="card mb-0">
                                                <div class="media p-20">
                                                    <div class="radio radio-info mr-3">
                                                        <input type="radio" name="radio1" id="radio33" value="option1">
                                                        <label for="radio33"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">ABC Seller<span class="badge badge-info pull-right digits">150 INR</span></h6>
                                                        <p class="rating-star-wrapper"><i class="icofont icofont-star txt-warning "></i><i class="icofont icofont-star "></i><i class="icofont icofont-star  "></i><i class="icofont icofont-star "></i><i class="icofont icofont-star  m-r-5"></i>1 start rating</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-success m-r-15">Submit</button>
                                <button type="submit" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js" ></script>
<script src="../assets/js/bootstrap/bootstrap.js" ></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js" ></script>
<script src="../assets/js/height-equal.js" ></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>

</body>

<!-- Mirrored from admin.pixelstrap.com/universal/default/megaoptions.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:12:19 GMT -->
</html>
