<?php
session_start();
include_once('config.php');
    
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
<body>


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
                <label>Please enter receipe name</label>
                <input type="text" name="receipe_name" >
    
<style>
 #project
        {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-left: 0px;
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
                <tr class="tr-header">
                <th width="10%">Sr No.</th>
                <th width="25%"><center>Item type </center></th>
                <th width="30%"><center>Item</center></th>
                <th width="10%"><center>Rate</center></th>
                <th width="9%"><center>Quantity</center></th>
                <th width="9%"><center>Total amount</center></th>
                <th><center>action</center></th>
                <div class="project1">
                <tr>
                    <td></td>
                    <td>
         <select name="particulars" id="particulars-list"  style="width: 200px;" onChange="getState(this.value);">
        <option disabled selected>Select Particulars</option><br>
        <?php
        $query = "select * from items";
        $query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                $id=$result['item_id'];
                ?>
     <option value="<?php echo $result["item_id"];?>"><?php echo $result["item_name"];?></option>
        <?php }}?>
    </select>  
                    </td>
               <td>
                <select name="item"  style="width: 200px;" id="item-list" onChange="getCost(this.value);" >
        <option selected disabled>Select item</option><br><br>
               <?php
        $query = "select * from switches";
        $query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
              

                ?>
          <option value="<?php echo $result["s_id"];?>"><?php echo $result["switch_name"]; ?></option>      
                <?php
                $s_id=$result['s_id'];  
            }}?>
         </select> 
               </td>
               
             <?php
        $query1 = "select * from switches where s_id = '".$s_id."'";
        $query_process1 = mysqli_query($link,$query1);
        if(mysqli_num_rows($query_process1)>0){
            while($result1 = mysqli_fetch_assoc($query_process1)){
                
              $cost=$result1['switch_rate'];
              ?>
              <td><div id="reterap"><input type="text" name="rate" onchange="getText3()" id="rate" value="<?php '$cost' ?>"style="width: 120px;" ></td>
                
          <!-- <?php }}?> -->
                <!-- <td><input type="text" name="quantity"></td> -->
                <td><input type="text"  id="quantity"name="quantity" onchange="getText3()" style="width: 125px;"></td>
                <td><input type="text" class="sum" id="sum" style="width: 130px;"></td>

                <td> 
                    <button class="addrow" name="add" onclick="myFunction1();"><i class="fa fa-plus"></i></button>
                        </td>
                </div>
                    </tr>
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Sub Total</strong></td>
                            <td><span class="subtotal" id="subtotal">0.00</span></td>
                        </tr>
                        <td></td>
                            <td></td>
                          <td></td>
                          <td></td>
                            <td class="text-right"><strong>H/W cost of MATE</strong></td>
                            <td><input class="form-control" style="width: 100%;" id="hwcost" value="0" type="text"></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Labour</strong></td> 
                            <td><input class="form-control"style="width: 100%;" id="labour" value="0" type="text"></td>
                        </tr>
                        <td></td>
                          <td></td>
                            <td></td>
                            <td></td>
                        <td class="text-right"><strong>Profit</strong></td> 
                            <td><input class="form-control" style="width: 100%;" id="profit" value="0" type="text"></td>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Grand Total</strong></td>
                            <td><span  id="grandTotal">0</span></td>
                        </tr>
                     </table>
                        <br><br>
          
          
</div>
 <input type="submit" name="submit" value="submit">         
</body>
<footer class="footer-fix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6 footer-copyright">
                            <p class="mb-0">Nutan Enterprise © 2019 Created By <a href="http://www.fillion.in/" target="_blank">Fillion Solutions Pvt. Ltd.</a></p>
                        </div>
                        
                    </div>
                </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script>
function getState(val) {
    $("#particulars-list").show();
    $.ajax({
    type: "POST",
    url: "get-country-state-ep.php",
    data:'item_id='+val,
    success: function(data){
        console.log(data);
        $("#item-list").html(data);
        
    }
    });
}
</script>
 <script>
    function getCost(val) {
        
    $("#item-list").show();
    $.ajax({
    type: "POST",
    url: "get-country-state.php",
    data:'s_id='+val,
    success: function(data){
        console.log(data);
        $("#reterap").html(data);
        
    }
    });

}
</script>
<script type="text/javascript">
function myFunction1() {
     var particulars = document.getElementById("particulars-list").value;
     var item = document.getElementById("item-list").value;
     var cost = document.getElementById("rate").value;
     var qty = document.getElementById("quantity").value;
     var sum = document.getElementById("sum").value;
  var table = document.getElementById("project");
  var row = table.insertRow(2);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  cell2.innerHTML = particulars;
   cell3.innerHTML = item;
   cell4.innerHTML = cost;
   cell5.innerHTML = qty;
   cell6.innerHTML = sum;
    document.getElementById("particulars-list").value('0');
      document.getElementById("item-list").reset();
      document.getElementById("rate").value="";
      document.getElementById("quantity").value="";
      document.getElementById("sum").value="";
  
}
</script>
<script>      
   function getText3(){
      var in1=document.getElementById('rate').value;
      var in2=document.getElementById('quantity').value;
      var in3=(in1*in2);
      document.getElementById('sum',2).value=in3;
   }
</script>
<script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                // delete : ".delete",
                parentClass : ".item-row",
                price : ".price",
                qty : ".qty",
                sum : "#sum",
                labour:"#labour",
                totalQty: "#totalQty",
                subtotal : "#subtotal",
                profit: "#profit",
                hwcost : "#hwcost",
                grandTotal : "#grandTotal"
            });
        });
        (function (jQuery) {
    $.opt = {};  // jQuery Object

    jQuery.fn.invoice = function (options) {
        var ops = jQuery.extend({}, jQuery.fn.invoice.defaults, options);
        $.opt = ops;

        var inv = new Invoice();
        inv.init();

        jQuery('body').on('click', function (e) {
            var cur = e.target.id || e.target.className;

            if (cur == $.opt.delete.substring(1))
                inv.deleteRow(e.target);

            inv.init();
        });

        jQuery('body').on('keyup', function (e) {
            inv.init();
        });

        return this;
    };
}(jQuery));

function Invoice() {
    self = this;
}

Invoice.prototype = {
    constructor: Invoice,

    init: function () {
        // this.calcTotalQty();
        this.calcSubtotal();
        this.calcGrandTotal();
    },
    
    calcSubtotal: function () {
         var subtotal = 0;
         jQuery($.opt.sum).each(function (i) {
             var total = jQuery(this).val();
             if (!isNaN(total)) 
                {subtotal += Number(total);
         }});

         subtotal = self.roundNumber(subtotal, 2);

         jQuery($.opt.subtotal).html(subtotal);

         return 1;
     },

    calcGrandTotal: function () {
        var grandTotal = Number(jQuery($.opt.subtotal).html())
                       + Number(jQuery($.opt.hwcost).val())
                       + Number(jQuery($.opt.labour).val())
                       + Number(jQuery($.opt.profit).val());
        grandTotal = self.roundNumber(grandTotal, 2);

        jQuery($.opt.grandTotal).html(grandTotal);

        return 1;
    },

     
        roundNumber: function (number, decimals) {
        var newString;// The new rounded number
        decimals = Number(decimals);

        if (decimals < 1) {
            newString = (Math.round(number)).toString();
        } else {
            var numString = number.toString();

            if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
                numString += ".";// give it one at the end
            }

            var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
            var d1 = Number(numString.substring(cutoff, cutoff + 1));// The value of the last decimal place that we'll end up with
            var d2 = Number(numString.substring(cutoff + 1, cutoff + 2));// The next decimal, after the last one we want

            if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
                if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
                    while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
                        if (d1 != ".") {
                            cutoff -= 1;
                            d1 = Number(numString.substring(cutoff, cutoff + 1));
                        } else {
                            cutoff -= 1;
                        }
                    }
                }

                d1 += 1;
            }

            if (d1 == 10) {
                numString = numString.substring(0, numString.lastIndexOf("."));
                var roundedNum = Number(numString) + 1;
                newString = roundedNum.toString() + '.';
            } else {
                newString = numString.substring(0, cutoff) + d1.toString();
            }
        }

        if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
            newString += ".";
        }

        var decs = (newString.substring(newString.lastIndexOf(".") + 1)).length;

        for (var i = 0; i < decimals - decs; i++)
            newString += "0";
        //var newNumber = Number(newString);// make it a number if you like

        return newString; // Output the result to the form field (change for your purposes)
    }
};

jQuery.fn.invoice.defaults = {
    delete: ".delete",
    parentClass: ".item-row",
    price: ".price",
    qty: ".qty",
    total: ".total",
    totalQty: "#totalQty",
    subtotal: "#subtotal",
    hwcost: "#hwcost",
    labour: "#labour",
    profit:"#profit",
    grandTotal: "#grandTotal"
};
    </script>
</head>
</html>
