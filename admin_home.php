<!DOCTYPE html>
<html lang="en">
<?php session_start();
include_once 'DBConection/DbConnection.php';

//$medicines=new DbConection();
$conn=  mysqli_connect("localhost", "root",'',"online_medicine_shopping");

    $q="SELECT * FROM `product`";
     $res=mysqli_query($conn,$q);

?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>Admin Account</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                 <span style="color:#8EBE08 ; font-size:40px">A d m i n_M o d u l e</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Medicine <span style="color:darkgreen; font-size:40px">STORE</span>
                        </a>
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first " ><a href="home.html">Home</a></li>
                            
                                    <li><a href="#">View Registered User</a></li>

                              

                                
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                           
                        </div>
                        <div id="bottom_right">
                            <div class="row">
                               
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        

                                        <div class="pl_0 col-md-6 col-xs-6">
                                            <div class="dropdown btn-group">
                                               
             <p style="margin-top: 17px; color: #8EBE08 ;font-size:20px">    WElCOME:<?php  echo $_SESSION['username'];?></p>
                            

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
        <div class="container-fluid bg-color">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
                                <div id="nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>


                                      <!--upper bar processes-->




                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav site_nav_menu1"  >
                                            <li class="first "><a href="home.html">Home</a></li>
                                    <!--<li><a href="all_medicines.php">view All Medicines</a></li>-->
                                <li><a href="logout_process.php">Logout <img src="images/exit-icon-3.png" width="20px"></a></li>
        



                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">
                          <!--             SEARCHING FORM            -->
                    <form  name="quick_find" method="GET" action="search_result.php">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Enter search keywords here" name="s" class="form-control input-lg" id="inputGroup"/>
                                <span class="input-group-addon">
                                <input type="submit" id="x" value="Search" style="color:white ;background-color:#8EBE08;border:none;" />
                                 
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                                <select  style="font-size: 14px; background: #EAEAEA; border: none;" name="manufacturers_id"  size="1" class="input-lg form-control arrow-hide date_class">
                                    <option value="" selected="selected">Please Select manufacturers</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                </select>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 left_sidebar1">
                        <div id="left_part">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">ADMIN</a>
                                                
                                                   
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel-body">
                                                <img src="images/adm.png" width="230px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                              
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContainer">  
                                                    <div class="infoBoxHeading">
                                                        <a href="#">What's New?</a>
                                                    </div> 
                                                    <div class="infoBoxContents" id="sidebar">
                                                        <div>
                                                            <a href="single-product.html">
                                                                <img src="images/img4.jpg" class="img-responsive" />
                                                            </a>
                                                        </div>
                                                        <a href="single-product.html">Lorem Simply</a><br />€21.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Information</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">    
                                                    <a href="#">Shipping &amp; Returns</a><br />   
                                                    <a href="#">Privacy Notice</a><br />   
                                                    <a href="#">Conditions of Use</a><br />   
                                                    <a href="#">Contact Us</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Bestsellers</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents" id="sidebar">
                                                    <a href="single-product.html">
                                                        <img src="images/img4.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html">Lorem Big Block</a><br /><del></del>
                                                    <span class="productSpecialPrice">€21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Specials</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <div class="infoBoxContents" id="sidebar">

                                                    <a href="single-product.html">
                                                        <img src="images/img6.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html">Lorem Big Block</a><br /><del></del>
                                                    <span class="productSpecialPrice">€21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                            function toggleChevron(e) {
                                $(e.target)
                                        .prev('.panel-heading')
                                        .find("i.indicator")
                                        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                            }
                            $('#accordion').on('hidden.bs.collapse', toggleChevron);
                            $('#accordion').on('shown.bs.collapse', toggleChevron);
                        </script>

                    </div> 
                    <div class="col-md-9 col-sm-8 col-xs-12 right_sidebar1">
                        <div id="right_part">
                            <div class="contentContainer">
                                <div class="contentText">
                                    <div class="breadcrumbs">
                                        <a href="home.html" class="headerNavigation"><i class="fa fa-home"></i></a>			
                                    </div>
                                </div>

                                <!----slidder start-!-->

                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">ADD NEW MEDICINE <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">



  <form class="form-horizontal" action="enter_product.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Categories">Categories</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="" name="cat_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Medicine Name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Company Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="" name="price">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pro_desc" placeholder="" name="pro_desc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Photo Of Medicine</label>
      <div class="col-sm-10">
        <input type="file" class="form-control"  name="image">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Supplier</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="" name="sup_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Quntity</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="" name="quntity">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control"   name="submit"> 
       <!-- <button type="submit" class="btn btn-default">Add New Medicine</button>-->
      </div>
    </div>
  </form>
</div>                    
                                
                            </div>
                        </div>

                                                <!--All medicines        -->
                                <div class="panel panel-default">
                                   <div class="panel-heading" >
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-method">ALL MEDICINES <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-shipping-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">


                

                <table border="1" style="border-color:gray ; width:810px ; text-align: center;" >
<thead>
<tr style="background-color:#39BAF0 ;color:white;">
    <th style="text-align: center; width: 50px"> ID</th>
    <th style="text-align: center;"> Name </th>
    <th style="text-align: center;"> PRICE:$ </th>
    <th style="text-align: center;"> QUANTITY </th>
    <th style="text-align: center;"> CATEGORY </th>
    <th style="text-align: center;"> DESCREPTION </th>
        <th style="text-align: center; "> SUPPLIER </th>
    <th style="text-align: center; width: 50px"> IMAGE </th>
     <th style="text-align: center;"> DELETE </th>

</tr></thead>

<tbody>
                        <?php 
                    
                            while($row=mysqli_fetch_assoc($res))
                            {
                          


echo "<tr >";
echo "<td style='text-align:center'>".$row['pro_id']."</td>";
echo "<td style='text-align:center'>".$row['name']."</td>";
echo "<td style='text-align:center'>".$row['price']."</td>";
echo "<td style='text-align:center'>".$row['quantity']."</td>";
echo "<td style='text-align:center'>".$row['cat_name']."</td>";
echo "<td style='text-align:center'>".$row['pro_desc']."</td>";
echo "<td style='text-align:center'>".$row['sup_id']."</td>";
echo "<td style='text-align:center;width:px'></td>";//$row['image']
echo    '<td><a href="delete_medicine_process.php?pro_id='.$row['pro_id'].'"><img src="images/drop-icon.png" width="35px" ></a>';
echo"</tr>";


                                 
                            }
                        ?>
</tbody>
                    </TABLE>





                            </div>
                        </div>
                    </div>


                            <!--                                All users Table                             -->
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">THE USERS <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

<?php


$r=mysqli_query($conn,"SELECT * FROM `user`");

?>
<table border="1" style="border-color:gray ; width:810px ; text-align: center;" >
<thead>
<tr style="background-color:#39BAF0 ;color:white;">
    <th style="text-align: center;"> ID</th>
    <th style="text-align: center;">User Name</th>
    <th style="text-align: center;">Password</th>
    <th style="text-align: center;">phone</th>
    <th style="text-align: center;">Type</th>
    <th style="text-align: center;">Full Name</th>

</tr></thead>

<tbody>
<?php

while($res=mysqli_fetch_array($r))
{

echo "<tr >";
echo "<td style='text-align:center'>".$res['id']."</td>";
echo "<td style='text-align:center'>".$res['username']."</td>";
echo "<td style='text-align:center'>".$res['password']."</td>";
echo "<td style='text-align:center'>".$res['phone']."</td>";
echo "<td style='text-align:center'>".$res['type']."</td>";
echo "<td style='text-align:center'>".$res['fullname']."</td>";
echo"</tr>";

}

?>
</table>


                            </div>
                        </div>
                    </div>

                                                        <!-- All Orders table        -->

                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">ORDERS <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

                           <?php

$conn=  mysqli_connect("localhost", "root",'',"online_medicine_shopping");
$r=mysqli_query($conn,"SELECT * FROM `order`");

?>
<table border="1" style="border-color:gray ; width:810px ; text-align: center;" >
<thead>
<tr style="background-color:#39BAF0 ;color:white;">
    <th style="text-align: center;">Order ID</th>
    <th style="text-align: center;">Product ID</th>
    <th style="text-align: center;">Customer ID</th>
    <th style="text-align: center;">Address</th>
    <th style="text-align: center;">Date</th>

</tr></thead>

<tbody>
<?php

while($res=mysqli_fetch_array($r))
{

echo "<tr >";
echo "<td style='text-align:center'>".$res['ord_id']."</td>";
echo "<td style='text-align:center'>".$res['product_id']."</td>";
echo "<td style='text-align:center'>".$res['customer_id']."</td>";
echo "<td style='text-align:center'>".$res['address']."</td>";
echo "<td style='text-align:center'>".$res['order_date']."</td>";

echo"</tr>";

}

?>
</table>





                            </div>
                        </div>
                    </div>














</div>
</div>
</div>
</div>
</div>



<div id="footer1">
            <div class="container-fluid footer-background">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-12 txt-center">
                                <a href="home.html">
                                    <span class="logo-text">DRUGSTORE</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div id="footer_menu">
                                    <a href="home.html">Home</a> | 
                                    <a href="#">About Us</a> | 
                                    <a href="#">Disclaimer</a> | 
                                    <a href="#">Guarantee</a> | 
                                    <a href="#">Shipping & Payment</a> | 
                                    <a href="#">Privacy Policy</a> <br class="disable_content" />
                                    <a href="#">Terms & Conditions</a> | 
                                    <a href="#">Contact Us</a> | 
                                    <a href="#">Site Map<span></span></a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div id="social_icons" class="pull-right">
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-yahoo"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-linkedin"></i></a>   
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="copyright">
                                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                                    © 2017 All right reserved. Designed by
                                    <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>





                               

    </body>
</html> 