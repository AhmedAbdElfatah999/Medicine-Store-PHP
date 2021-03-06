<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
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
                        Medi<span style="color:#39BAF0; font-size:40px">Store</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Medi<span style="color:#39BAF0; font-size:40px">Store</span>
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
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                    <a href="cart.html"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
                                </div><span>Your cart:</span><span class="cart_total">€<?php echo $_SESSION['total']; ?> </span><span class="cart_items"></span>
                            </div> 
                        </div>
                        <div id="bottom_right">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 wd_auto">
                                    <div class="left">
                                        <div class="login">
                            <a class="btn btn-default reg_button" href="login.php">Login</a> 
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

        <div class="main-content">
            <div class="container cart-block-style">          
                <div class="breadcrumbs">
                    <a href="home.html"><i class="fa fa-home"></i></a>
                    <a href="#">Shopping Cart</a>
                </div>
                <div class="contentText">
                    <h1>Shopping Cart      
                    </h1>
                </div>
             
<!--       view cart content          -->
    <div id="page" >
                    <!-- start content -->
                    <div id="content">
                      
                       
                            <div class="entry">
                        
                        
                            <form action="cart_processes.php" method="POST">
                            <table width="100%" border="1" style="text-align: center; border-color:gray">
                                <tr >
                                    <Td> <b>No
                                    <td> <b>Category
                                    <td> <b>Product
                                    <td> <b>Quantity
                                    <td> <b>Rate
                                    <td> <b>Price
                                    <td> <b>Delete
                                </tr>
                                <!--<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr> -->
                            
                                <?php
                        
                                    $total = 0;
                                    $i = 1;

                                    //print_r($_SESSION['cart']);
                                    
                                 //here we need the cart session
                           
              if(isset($_SESSION['cart']))
                         {

                             
                                    foreach($_SESSION['cart'] as $id=>$x)
                                    {  
                                    //echo $id; 
                                        echo '
                                            <tr>
                                            <Td> '.$i.' 
                                             <td> '.$x['cat_name'].'
                                            <td> '.$x['name'].'
                                          
                            <td> <input style="border:none ;text-align:center" type="number" size="1" value="'.$x['qty'].'" name="'.$id.'">
                                            <td> '.$x['price'].'
                                            <td> '.($x['qty']*$x['price']).'
                                            <td> <a href="cart_processes.php?id='.$id.'"><img src="images/delete-icon.png" width=18px></a>
                                        </tr>
                                        ';
                                        echo "<br>  ";
                                        
                                        $total = $total + ($x['qty']*$x['price']);
                                        $i++;
                                   }
                                }else{  

                                   //echo 'empty session cart'.$_SESSION['cart'];

                                     echo "<h5 style='color:red'>Cart is empty</h5>";
                                    }
                           
                            ?>

                            <!--<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>-->
                                
                            <tr>
                            <td colspan="6" align="right">
                            <h4>.Total Bill.</h4>
                            
                            </td>
                            <td> <h4>€ <?php echo $total; $_SESSION['total']=$total; ?> </h4></td>
                            </tr>
                             <!--<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>-->
                            
                            <Br>
                                </table>                        

                                <br><br>
                            <center>
                        <input type="submit" value=" Re-Calculate "  style="background-color:#7AA307;color: white;border:none;height:35px">
                           
                            </center>
                            </form>
                            </div>
                            
                    
                        
                    </div>
                    <!-- end content -->


                <div class="buttons">
                    <div class="pull-left"><a class="btn btn-default" href="home.html"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                    <div class="pull-right"><a class="btn btn-primary reg_button" href="checkout.php">Confirm & Checkout</a></div>
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