<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admin.pixelstrap.com/universal/default/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:19:05 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/Nlogo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/Nlogo.jpg" type="image/x-icon" />
    <title>Sign-up</title>

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

        <!--sign up page start-->
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="auth-innerleft">
                        <div class="text-center">
                            <img src="../assets/images/logo_of_nutun.jpg" class="logo-login" alt="">
                            <hr>
                            <!-- <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-rss" aria-hidden="true"></i></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <h3 class="text-center">NEW USER</h3>
                            <h6 class="text-center">Enter your Username and Password Signup</h6>
                            <div class="card mt-4 p-4">
                                <form class="theme-form">
                                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div><br>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div><br>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div><br>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
                                    <!-- <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Deo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">User Name</label>
                                        <input type="text" class="form-control" placeholder="John Deo">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="**********">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">BOD</label>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <select class="form-control mb-1">
                                                    <option>DD</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control mb-1">
                                                    <option>MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control mb-1">
                                                    <option>YYYY</option>
                                                    <option>1990</option>
                                                    <option>1991</option>
                                                    <option>1992</option>
                                                    <option>1993</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-secondary">Sign Up</button>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-left mt-2 m-l-20">
                                                Are you already user?&nbsp;&nbsp;<a href="login.html" class="btn-link text-capitalize">Login</a>
                                            </div>
                                        </div>

                                    </div> -->
                                    <!-- <div class="form-divider"></div> -->
                                    <!-- <div class="social mt-3">
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <button class="btn social-btn btn-fb mb-2">Facebook</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn social-btn btn-twitter mb-2">Twitter</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn social-btn btn-google mb-2">Google +</button>
                                            </div>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--sign up page Ends-->
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

<script>
</script>
</body>


<!-- Mirrored from admin.pixelstrap.com/universal/default/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 11:19:19 GMT -->
</html>