<?php
// Initialize the session

 $username=$password="";
// Include config file
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

 }
// Define variables and initialize with empty values    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location:index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                            
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
 
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/universal/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:18:52 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/nutunlogo.jpg" type="image/x-icon" />
    <title>Nutan Enterprise</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

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
    <div class="container-fluid">
        <!--login page start-->
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="auth-innerleft">
                        <div class="text-center">
                            <img src="../assets/images/nutun_img.png" class="logo-login" alt="">
                            <!-- <hr> -->
                            <!-- <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-facebook txt-fb" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-google-plus txt-google-plus" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-twitter txt-twitter" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-linkedin txt-linkedin" aria-hidden="true"></i></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <h4>LOGIN</h4>
                            <h6>Enter your Username and Password For Login</h6>
                            <div class="card mt-4 p-4 mb-0">
                                <form class="theme-form" method="post">
                                    <div class="form-group">
                                        <label class="col-form-label pt-0">User Name</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <p class="col-form-label"><a href="">Forgot Password?</a></p>
                                    </div>
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Remember me</label>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-secondary">LOGIN</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
        <!--login page end-->
    </div>
</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.js"></script>

<!-- Theme js-->
<script src="../assets/js/script.js"></script>

</body>


<!-- Mirrored from admin.pixelstrap.com/universal/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:18:52 GMT -->
</html>