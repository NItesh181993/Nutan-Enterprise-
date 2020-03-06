<!--This page was created by samarth keskar on date : . this page creates the new project and inserts into the database named nutan and table name project-->
<?php
session_start();// Initialize the session
include_once ("config.php");// Include config file
if(isset($_POST['submit']))
{
        if (empty($_POST['developer']))
        {

            $error = true;
        } 
        else {

            $developer = $_POST['developer'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
         

            $sql = "INSERT INTO developer (developer_name,address,contact) VALUES('".$developer."','".$address."','".$contact."')";
                $process_query = mysqli_query($link,$sql);
                if(!$process_query){
                    echo $mysqli->error;
                    }
                    else{
                    echo "<script>alert('Developer Added Successfully ..!');
                    window.location.href = 'index.php';
                    </script>";
                }
                
    }
}

    ?>
<!-- Mirrored from admin.pixelstrap.com/universal/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 10:51:20 GMT -->
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

</head>
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
                    <a href="#" class="sidebar-header">
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
        
        <!--Page Sidebar Ends-->
        <!--Page Sidebar Ends-->

<!-- page Body with CSS -->

            <div class="page-body"><br>
        <style>
    * {
          box-sizing: border-box;
          padding-bottom: 0px;
        }

        input[type=text], select, textarea {
          width: 100%;
          padding: 15px;
          padding-bottom: 20px;
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

            .container {
              border-radius: 20px;
              background-color: #f2f2f2;
              padding: 5px;
            }
            .col-25 {
              /*float: left;*/
              width: 40%;
              margin-top: 30px;
              padding-left: 30px;
            }

            .col-75 {
              /*float: left;*/
              width: 40%;
              margin-top: 30px;
              padding-left: 30px;
              height: 20px;
            }

            /*.col-25 {
              float: right;
              width: 40%;
              margin-top: 0px;
              /*padding-left: 30px;*/
           /* }

            .col-75 {
              float: left;
              width: 75%;
              margin-top: 5px;
              padding-left: 30px;
            }
*/*/
            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .col-25, .col-75, input[type=submit] {
                width: 100px;
              }
            }
            </style>
    
            <div class="container">
            <form method="POST" action="add_developer.php">
            <div class="row">
            <div class="col-25">
            <label for="developer">Developer name</label>
            </div>
            <div class="col-75">
            <input type="text" id="developer" name="developer" placeholder="developer Name" required="Please Enter developer Name..">
            </div>
            <div class="col-25">
            <label for="Address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="developer's address" required="Please Enter developer Address..">
            </div>
            <div class="col-25">
            <label for="contact">contact number</label>
            </div>
            <div class="col-75">
            <input type="number" id="contact" name="contact" placeholder="contact number" required="Please Enter developer Name..">
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </div>
            <div class="btn">
            <input type="submit" value="Submit" name="submit">
            </div>
            </form>
            </div>
        <!--Page Body Ends-->

</div>


</div>

        </div>
    </div>
    <footer class="footer-fix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6 footer-copyright">
                            <p class="mb-0">Nutan Enterprise © 2019 Created By <a href="http://www.fillion.in/" target="_blank">Fillion Solutions Pvt. Ltd.</a></p>
                        </div>
             
                    </div>
                </div>
</footer>
</div>


</body>
</html>