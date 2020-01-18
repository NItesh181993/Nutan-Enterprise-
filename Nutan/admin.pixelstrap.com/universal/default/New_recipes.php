<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/universal/default/datatable-ext-basic-button.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:12:46 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon"/>
    <title>Nutun Enterprises</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!--JSGrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/datatable-extension.css" />

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

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

<!--page-wrapper Start-->
<div class="page-wrapper">
    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.php">
                    <img src="../assets/images/final_logo1.jpg" class="image-dark" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
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
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                            <img class="pull-right mr-2" src="../assets/images/dashboard/browser.png" alt="header-browser">
                        </a>
                    </li>
                    <!-- <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <img class="pull-right mr-2" src="../assets/images/dashboard/translate.png" alt="header-translate">
                        </a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#" data-lng="en">
                                    <i class="flag-icon flag-icon-ws"></i> English
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="es">
                                    <i class="flag-icon flag-icon-va"></i> Spanish
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="pt">
                                    <i class="flag-icon flag-icon-id"></i> Portuguese
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="fr">
                                    <i class="flag-icon flag-icon-fr"></i> French
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <img class="pull-right mr-2" src="../assets/images/dashboard/notification.png" alt="header-notification">
                            <span class="badge badge-pill badge-primary notification">3</span>
                        </a>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>Notification <span class="badge badge-pill badge-secondary text-white text-uppercase pull-right">3 New</span></li>
                            <li>
                                <div class="media">
                                    <i class="align-self-center notification-icon icofont icofont-shopping-cart bg-primary"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0">Your order ready for Ship..!</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>Just Now</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="align-self-center notification-icon icofont icofont-download-alt bg-success"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success">Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>5 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="align-self-center notification-icon icofont icofont-recycle bg-danger"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger">250 MB trush files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>25 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">You have Check <a href="#">all</a> notification  </li>
                        </ul>

                    </li> -->
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="pull-right mr-2" src="../assets/images/dashboard/user.png" alt="header-user"/>
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

    <!--Page Body Start-->
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
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>New Recipes
                                <!-- <small>Universal Admin panel</small> -->
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">List of Recipes</li>
                                <li class="breadcrumb-item">New Recipe </li>
                                <!-- <li class="breadcrumb-item active">Basic Button</li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Ingredients</h5>
                            </div>
                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <table id="class-button" class="display">
                                        <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Items</th>
                                            <th>Quantity</th>
                                            <th>Rates</th>
                                            <th>Total Cost</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Socket</td>
                                            <td>4</td>
                                            <td>16</td>
                                            <td>64</td>
                                            <td>
                                                <button class="dt-button btn-secondary" tabindex="0" aria-controls="class-button"><span>Edit</span></button>
                                                <button class="dt-button btn-danger" tabindex="0" aria-controls="class-button"><span>Delete</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1.5mm wire</td>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>4</td>
                                            <td>
                                                <button class="dt-button btn-secondary" tabindex="0" aria-controls="class-button"><span>Edit</span></button>
                                                <button class="dt-button btn-danger" tabindex="0" aria-controls="class-button"><span>Delete</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>pipe</td>
                                            <td>2</td>
                                            <td>20</td>
                                            <td>40</td>
                                            <td>
                                                <button class="dt-button btn-secondary" tabindex="0" aria-controls="class-button"><span>Edit</span></button>
                                                <button class="dt-button btn-danger" tabindex="0" aria-controls="class-button"><span>Delete</span></button>
                                            </td>
                                        </tr>
                                        
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js" ></script>
<script src="../assets/js/bootstrap/bootstrap.js" ></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js" ></script>

<!--Data table extention js-->
<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
<!-- <script src="../assets/js/datatable-extension/dataTables.buttons.min.js"></script>
 --><script src="../assets/js/datatable-extension/buttons.colVis.min.js"></script>
<script src="../assets/js/datatable-extension/jszip.min.js"></script>
<script src="../assets/js/datatable-extension/pdfmake.min.js"></script>
<script src="../assets/js/datatable-extension/vfs_fonts.js"></script>
<script src="../assets/js/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="../assets/js/datatable-extension/dataTables.select.min.js"></script>
<script src="../assets/js/datatable-extension/buttons.print.min.js"></script>
<script src="../assets/js/datatable-extension/buttons.html5.min.js"></script>
<script src="../assets/js/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/datatable-extension/dataTables.responsive.min.js"></script>
<script src="../assets/js/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/datatable-extension/custom.js"></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
<!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
<!-- <script src="../assets/js/chat-sidebar/chat.js"></script> -->

</body>

<!-- Mirrored from admin.pixelstrap.com/universal/default/datatable-ext-basic-button.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:12:46 GMT -->
</html>