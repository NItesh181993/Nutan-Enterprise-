<?php
session_start();
include_once('config.php');
$p_id=$_GET["id"];
$query="SELECT *FROM project where id='".$p_id."'";
$mysqli_query= mysqli_query($link,$query);
       // echo $query1;
        if (mysqli_num_rows($mysqli_query)>0) {
            while ($row1 = mysqli_fetch_assoc($mysqli_query)) {
              $name=$row1['project_name'];                          
}}
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
  <li>Add switch board</li>
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
                    <a href="exist.php" class="sidebar-header">
                        <i class="icon-desktop"></i><span>List of switch boards</span>
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
            
                    <a href="exist.php?id=<?php echo $p_id?>" style="margin-right: 10;margin-top:0px;font-size: 18px">Add existing switch board</a> 

                    <a href="project_sb.php?id=<?php echo $p_id?>" style="margin-left: 49%; margin-top:0px;font-size: 18px">List of switch board for project-</a> 
            <div class="container">
                <label>Please enter switch board name</label><br>
                <input type="text" id="sb_name"name="sb_name" >
                <button onclick="create();">create</button>
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
                <th width="5%">Sr No.</th>
                <th width="45%"><center>Receipe_name </center></th>
                <th width="20%"><center>Rate</center></th>
                <th width="15%"><center>Quantity</center></th>
                <th width="9%"><center>Total amount</center></th>
                <th><center>action</center></th>
                <div class="project1">
                <tr>
                    <td></td>
                    <td>
         <select name="receipe" id="receipe-list" style="width: 100%; " onchange="getState(this.value);">
        <option disabled selected value="0">Select Receipe</option><br>
        <?php
        $query = "select id,receipe_name from receipe";
        $query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                 
                ?>
     <option value="<?php echo $result["id"];?>"><?php echo $result["receipe_name"];?></option>
        <?php
     
        
           }} ?>

    </select>  

                    </td>
               
                <td><div id="reterap"><input type="text" name="rate" onchange="getText3()" id="rate" value="<?php '$cost' ?>"style="width: 100%;" ></td>            
          
                <!-- <td><input type="text" name="quantity"></td> -->
                <td><input type="text"  id="quantity" name="quantity" onchange="getText3();" style="width: 100%;"></td>
                <td><input type="text" class="sum" disabled="disabled" id="sum" style="width: 100%;background-color: white "></td>

                <td> 
                    <button class="addrow"  id="add" onclick="myFunction1();"><i class="fa fa-plus"></i></button>
                        </td>
                
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Sub Total</strong></td>
                            <td><input type="text" style="width: 100%;background-color: white"disabled="disabled" class="subtotal"  value="0" id="subtotal"></td>
                        </tr>
                        
                            <td></td>
                          <td></td>
                            <td class="text-right"><strong>H/W cost of material</strong></td>
                            <td><input class="form-control" style="width: 100%;" id="hwcost_perc" onchange="calc2();"type="text"></td>
                            <td><input class="form-control" style="width: 100%;" id="hwcost" value="0" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            
                            <td class="text-right"><strong>Labour</strong></td> 
                            <td><input class="form-control"style="width: 100%;" id="labour_perc" onchange="calc1();" 
                            type="text"></td>
                            <td><input class="form-control"style="width: 100%;" id="labour" value="0"  type="text"></td>
                        </tr>
                        <td></td>
                        <td></td>
                            
                        <td class="text-right"><strong>Profit%</strong></td> 
                        <td><input class="form-control" style="width: 100%;" id="profit_perc" onchange="calc();" type="text"></td>
                            <td><input class="form-control" style="width: 100%;" id="profit" value="0" type="text"></td>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Grand Total</strong></td>
                            <td><span id="grandTotal">0</span></td>
                        </tr>
                        </tbody>
                     </table>     
</div>
 <input type="submit" id="submit" name="submit" onclick="save();" value="submit">         
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
 <script type="text/javascript">
  var sTotal= 0;
    var i=1;
 function myFunction1() {
     var par=document.getElementById("receipe-list");
     var par2=document.getElementById("rate").value;
     var par3=document.getElementById("quantity").value;
     if(par.selectedIndex == 0 || par2 == 0|| par3 == 0)
     {
        alert("Please fill all fields");
     }
     else
     {
     var subT=document.getElementById("subtotal").value;
     var rate = document.getElementById("rate").value;

     var qty = document.getElementById("quantity").value;
     var sum = document.getElementById("sum").value;
     intSum = parseFloat(sum);
     
     var subT1=parseFloat(subT);
     sTotal = intSum + subT1;
     var sTotal1 =sTotal.toFixed(2);
     document.getElementById("subtotal").value=sTotal1;
     var table = document.getElementById("project");
     var row = table.insertRow(1+i);
     var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);
     var cell5 = row.insertCell(4);
     row.insertCell(-1).textContent = "project";
     var lastRow = row;
     var lastCell = lastRow.cells[lastRow.cells.length - 1];
     cell2.innerHTML = ($("#receipe-list option:selected").text());
     cell3.innerHTML = rate;
     cell4.innerHTML = qty;
     cell5.innerHTML = sum;
     var j=parseInt(i);
     lastCell.innerHTML = "<button class='delete' onclick='remove(i--)'><i class='fa fa-times-circle'></i></button>";
     var par=document.getElementById("receipe-list"); par.selectedIndex =0;
     document.getElementById("rate").value="";
     document.getElementById("quantity").value="";
     document.getElementById("sum").value="";
     cell1.innerHTML= i++;
}
}
</script>

 <script>
function getState(val) {
    $("#receipe-list").show();
    $.ajax({
    type: "POST",
    url: "make1.php",
    data:'id='+val,
    success: function(data){
        $("#reterap").html(data);  
    }
    });
}

function create()
{
    var test=document.getElementById("sb_name").value
 if (test=="") {
    alert("enter the switch board name");
 }
 else
{
var name=document.getElementById("sb_name").value;
    $.ajax({
    type: "POST",
    url: "test_sb.php",
    data:"name="+name,
    success: function(data){
        alert(data);
          
    }
    });

}



}

function save()
{  
    var r=2;
    var test=document.getElementById("sb_name").value
 if (test=="") {
    alert("enter the switch board name");
     }
     else
     {
    var table=document.getElementById("project");
    var count=i;
    

if(count > 1)
{
    
while(r<=count)
{
    var board=[];
    rownum=table.rows[r];
    var c=1;
  while(c<=4)
  {
    cell_Value=rownum.cells[c++];
        
            board.push(cell_Value.innerHTML);
            var receipe=board[0];
            var cost=board[1];
            var quantity=board[2];
            var total=board[3];
                 
        }
        var p_id ="<?php echo $p_id ?>";
   var name=document.getElementById("sb_name").value; 
   var grandTotal=document.getElementById("grandTotal").innerHTML;
        $.ajax({ type: "POST",
            url: "test1_sb.php",
            data:{
                pid:p_id,
                name:name,
                receipe:receipe,
                rate:cost,
                qty:quantity,
                total:total,
                gtotal:grandTotal 
                        },
                success: function(data){
                    console.log(data);
                    // window.location.reload();
                           }
            });
        r++; 
    }
        }
        var total1=total;
        $.ajax({ type: "POST",
            url: "test2_sb.php",
            data:{
                pid:p_id,
                name:name,
                total:total1
                },
                success: function(data){
                    console.log(data)
                    
                           }
            });
        $.ajax({ type: "POST",
            url: "test3_sb.php",
            data:{
                // pid:p_id,
                name:name,
                // receipe:receipe,
                // rate:cost,
                // qty:quantity,
                // total:total,
                // gtotal:grandTotal 
                        },
                success: function(data){
                    console.log(data);
                    // window.location.reload();
                           }
            });
        
         alert("receipe added succesfully");
        
             }
}

  function calc()
  {
var profit =document.getElementById("profit_perc").value;
var subtotal =document.getElementById("grandTotal").innerHTML;
var result = subtotal * parseFloat((profit/100));
var res1=result.toFixed(2);
document.getElementById('profit').value=res1;

  }


  function calc1()
  {

var labour =document.getElementById("labour_perc").value;
var ftotal =document.getElementById("grandTotal").innerHTML;
var result1 = parseFloat(ftotal) + parseFloat(labour);
document.getElementById("labour").value=labour

  }
  function calc2()
  {
var hw =document.getElementById("hwcost_perc").value;
var grandTotal =document.getElementById("subtotal").value;
var result1 = parseFloat(grandTotal) * parseFloat((hw/100));
var res=result1.toFixed(2);
document.getElementById("hwcost").value=res;

  }
 </script>
 <script>   

   function getText3()
   {
        var temp = document.getElementById("rate").value;
      var quantity=document.getElementById('quantity').value;
      var sum=(temp*quantity);
      var sum1=sum.toFixed(2);
      document.getElementById('sum').value=sum1;
   }
// </script>
 <script>
    <!-- window.onbeforeunload = function(){ -->
  // return 'Are you sure you want to leave?';
// };
    function remove(i)
    { 
      var cell = document.getElementById("project").rows[i].cells;
        var Total1 = project.rows[i].cells[4].innerHTML;
        
        var yes=confirm("are you sure you want to delete this entry?")
        if(yes && i>=2)
        {
        var subT=document.getElementById("subtotal").value;
        
         subT=subT-Total1;  
        document.getElementById("project").deleteRow(i);
        document.getElementById("subtotal").value=subT;
        }
        calc1();
        calc(); 
    }
// </script>
 <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
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
    init: function () {
        this.calcGrandTotal();
    },
   
    calcGrandTotal: function () {
        var grandTotal = Number(jQuery($.opt.subtotal).val())
                       + Number(jQuery($.opt.hwcost).val())
                       + Number(jQuery($.opt.labour).val())
                       + Number(jQuery($.opt.profit).val());
        grandTotal = Number(grandTotal, 2);
       var grandTotal1=grandTotal.toFixed(2);
        jQuery($.opt.grandTotal).html(grandTotal1);
        return 1;
    },
};

jQuery.fn.invoice.defaults = {
    delete: ".delete",
    parentClass: ".item-row",
    price: ".price",
    qty: ".qty",
    total: ".total",
    subtotal: "#subtotal",
    hwcost: "#hwcost",
    labour: "#labour",
    profit:"#profit",
    grandTotal: "#grandTotal"
};
    </script>
</head>
</html>
