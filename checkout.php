 <?php
 session_start();
 //extract($_POST);
 //extract($_SESSION);

 
$conn=mysqli_connect("localhost","root","","online_medicine_shopping"); 

if (isset($_SESSION['username'])) {
    # code...

 $username=$_SESSION['username'];
     $query1="SELECT id FROM `user` WHERE username='$username' ";
    $res=mysqli_query($conn,$query1) or die("Can't Execute Query...");
   $userid=mysqli_fetch_array($res);
   $_SESSION['userid']=$userid[0];
  
   // print_r($med_id);
  //echo count($_SESSION['cart']);

}

//insert into order table 
if(isset($_POST['continue'])){
    $uid=$_SESSION['userid'];
    $address=$_POST['address'];
      $i=0;
  while($i<=count($_SESSION['cart'][$i]) ) { 
//print_r( $_SESSION['cart']);
      $medname=$_SESSION['cart'][$i]['name'];

      $query2="SELECT pro_id FROM `product` WHERE name like '%$medname%'";

       $res2=mysqli_query($conn,$query2) or die("Can't Execute Query...");

         $med_id=mysqli_fetch_array($res2);

        

         $date=date('d(l)-m-y ,h:i:s');

$query3="INSERT INTO `order` (`ord_id`, `order_date`, `address`, `customer_id`, `product_id`) VALUES (NULL, '$date', '$address', '$uid', '$med_id[$i]')";
         mysqli_query($conn,$query3);
          $i++;
 }
}
//end of order 



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
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
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Guarantee</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Shipping & Payment</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                    <a href="cart.html"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
                                </div><span>Your cart:</span><span class="cart_total">€ <?php if(isset($_SESSION['username'])){echo $_SESSION['total']; }?> </span><span class="cart_items">(0 items)</span>
                            </div> 
                        </div>
                         <div id="bottom_right">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 wd_auto">
                                    <div class="left">
                                        <div class="login">
                            <a class="btn btn-default reg_button" href="login.html">Login</a> 
                            <a class="btn btn-default reg_button" href="register.php">Signup</a>
                            <a class="btn btn-default reg_button" href="logout_process.php">Logout</a>
                                        </div>          
                                    </div>
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class=" pl-0 col-md-6 col-xs-6">

                                            <div class="dropdown btn-group">
                                               
                                            
                                            </div>
                                        </div>

                                        <div class="pl_0 col-md-6 col-xs-6">
                                            <div class="dropdown btn-group">
                                                
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

                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav site_nav_menu1"  >
                                            <li class="first "><a href="home.html">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Guarantee</a></li>
                                            <li><a href="#">Disclaimer</a></li>
                                            <li><a href="#">Shipping & Payment</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Site Map</a></li>
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
                                <input type="submit" id="x" value="Search" name ="search"style="color:white ;background-color:#8EBE08;border:none;" />
                                 
                                </span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="main-content">
            <div class="container checkout">
                <div class="breadcrumbs">
                    <a href="home.html"><i class="fa fa-home"></i></a>
                    <a href="checkout.html">Checkout</a>
                </div>
                <h2 class="text-center text-uppercase text-bold">checkout</h2>
                <hr class="small-line">
                <div id="accordion" class="panel-group margin-top">
                    
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">Step 1: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">
                              
                                         <!--order form-->
                                <form class="form-horizontal" action="checkout.php"  method="post">
                                    <div class="form-group required">
                                        <label for="input-shipping-firstname" class="col-sm-2 control-label"> Name</label>
                                        <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" name="name" required>
                                        </div>
                                    </div>
                                  
                                 
                                    <div class="form-group required">
                <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Your Address" name="address" required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group required">
                                        <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-city" placeholder="City"  name="city" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Postal Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code"  name="pc" required>
                                        </div>
                                    </div>


                                          <div class="form-group required">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Mobile Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Phone Number"  name="phone" required="">
                                        </div>
                                    </div>


                                    <div class="form-group required">
                                        <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-shipping-country" name="country_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-shipping-zone" name="state">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                                <option value="3516">Angus</option>
                                                <option value="3517">Argyll and Bute</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                             <input type="submit" class="btn btn-primary"  id="button-payment-method" value="Continue" name="continue">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                                          <!--payment form -->
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">Step 2: Payment Method <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

   
                                 <img src="images/paypal.png" width="700px" height="80px" style="margin-left: 180px">


                                 <div class="form-group required">
                                    <br><br>
                                        <label for="input-shipping-city" class="col-sm-2 control-label">Name On Card</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-city" placeholder="Name "  name="nameoncard" required>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group required">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Card Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Card Number"  name="cardnumber" required>
                                        </div>
                                    </div>

                                        <br><br>
                                          <div class="form-group required">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">ZIP/Postal code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="0000000"  name="zibcode" required>
                                        </div>
                                    </div>
                                    <br><br><br><br><br>
                                
                                <div class="buttons">
                                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>        <input type="checkbox" value="1" name="agree">
                                        &nbsp;
                                        <input type="button" class="btn btn-primary"  id="button-payment-method" value="Continue">
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