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
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <link rel="stylesheet" href="login_App_1/">
        <link rel="stylesheet" href="adminhome.css">
        <link rel="stylesheet" href="login_App_1/register_course.php">
        
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
                           
                        </div>
                        <div id="bottom_right">
                            
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class=" pl-0 col-md-6 col-xs-6">

                                           
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
                                    
                                    <li><a href="#">View Registered User</a></li>
                                    <li><a href="all_medicines.php">view All Medicines</a></li>
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
                    <form  name="quick_find">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Enter search keywords here" class="form-control input-lg" id="inputGroup"/>
                                <span class="input-group-addon">
                                    <a href="#" style="color:white">Search</a>
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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Categories</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i  id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">
                                                    <a href="product.html">Category One</a>&nbsp;(94)<br />
                                                    <a href="product.html">Category Two</a>&nbsp;(9)<br />
                                                    <a href="product.html">Category Three</a>&nbsp;(5)<br />
                                                    <a href="product.html">Category Four</a>&nbsp;(6)<br />
                                                    <a href="product.html">Category Five</a>&nbsp;(94)<br />
                                                    <a href="product.html">Category Six</a>&nbsp;(94)<br />
                                                    <a href="product.html">Category Seven</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What's New?</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right accordan_plus"></i>
                                                </a>
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
<!-- Tables Product -->
<form method="post"></form>
     
  <table class="table table-hover">
    <thead>
      <tr>
      <th name="categories" class="col-md-1">categories</th>
        <th name="medicine"  class="col-md-1">Medicine Name</th>
        <th name="company"  class="col-md-1">Company Name</th>
        <th name="price"  class="col-md-1">price</th>
        <th name="description" class="col-md-2">Description</th>
        <th name="photo" class="col-md-2" >Photo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Flu </td>
        <td>Walgreens Ephrine Nose Drops	</td>
        <td>Walgreens  Limited 	</td>
        <td>$6.29</td>
        <td>•  Relieves nasal congestion<br>
•  Helps decongest sinus passages <br>
•  Fast acting</td>
        <td><img src="images/valgreen1.jpg" alt=""></td>
      </tr>
      <tr>
        <td>Flu</td>
        <td>Walgreens Wal-Tussin Chest Congestion </td>
        <td>Walgreens  Limited </td>
        <td>$0.87</td>
        <td>•	Loosens and thins bronchial secretions <br>
•	Helps make coughs more productive br
•	Non-drowsy and alcohol-free
</td>
        <td><img src="images/walgreen.jpg" ></td>
      </tr>
      <td>Flu</td>
        <td>Walgreens Mucus Relief Chest Congestion Immediate-Release Tablets	</td>
        <td>Walgreens  Limited</td>
        <td>$2099	</td>
        <td>•  Helps loosen phlegm <br>
•  Makes coughs more productive <br>
•  Easy to swallow</td>
        <td><img src="images/wal.jpg" alt=""></td>
      <tr>
        <td>

Flu 	
</td>
        <td>Walgreens Wal-Phed PE Nasal Decongestant Tablets</td>
        <td>
Walgreens  Limited</td>
        <td>$649</td>
        <td>•  Relieves sinus congestion & pressure <br>
•  For nasal congestion <br>
•  Non-drowsy</td>
        <td><img src="images/walphed.jpg" alt=""></td>
      </tr>



      <tr>
        <td>Flu 	</td>
        <td>Walgreens Wal-Four Nasal Decongestant Spray</td>
        <td>Walgreens  Limited </td>
        <td>$729</td>
        <td>•  For dry nasal membranes <br>
•  Pharmacist recommended <br>
•  Gluten free</td>
        <td><img src="images/walfour.jpg" alt=""></td>
      </tr>



      
      <tr>
        <td>EczemaTreatment </td>
        <td>Dermarest Eczema Medicated Lotion Fragrance Free</td>
        <td>Veeks
Comp.</td>
        <td>1099</td>
        <td>•  Temporary relieves itching <br>
•  For rashes due to eczema <br>
•  Non-greasy & dermatologist tested</td>
        <td><img src="" alt=""></td>
      </tr>


      <tr>
        <td>EczemaTreatment </td>
        <td>Aveeno Active Naturals Eczema Therapy Hand</td>
        <td>Veeks Comp.	</td>
        <td>$499</td>
        <td>This breakthrough hand cream helps to improve the 4 symptoms of eczema - itch, the appearance of redness, dryness</td>
        <td><img src="" alt=""></td>
      </tr>


      <tr>
        <td>Eczema Treatment </td>
        <td>Natralia Eczema & Psoriasis Cream</td>
        <td>VeeksComp.	</td>
        <td>$1199</td>
        <td>•  Relief of skin irritation <br>
•  Aids itching, redness, flaking & scaling <br>
•  Fortified with traditional herbs</td>
        <td><img src="" alt=""></td>
      </tr>


      <tr>
        <td>Eczema Treatment 
</td>
        <td>Aveeno Eczema Care Itch Relief Balm</td>
        <td>Veeks Comp.	</td>
        <td>$1999	</td>
        <td>11 ounces of eczema therapy relief itch relief balm Provides immediate and long-lasting itch</td>
        <td><img src="" alt=""></td>
      </tr>
      <?php
      
       require_once 'login_App_1/Classes/class_course.php';
       require_once 'login_App_1/Classes/class_student.php';
       
       
       if((isset( $_SESSION['username'])&&isset( $_SESSION['password'])&&isset( $_SESSION['type']))&&$_SESSION['type']==2){
       echo '<meta charset="utf-8">';
       include_once './user_menue.php';
       $couse_object=new class_course("");
       $all_courses=$couse_object->show_All_courses();
       
       echo '<table border="1">';
       echo '<form action="register_course.php" method="post"';
       echo'<tr><td>Select</td><td>Course Arabic Name</td><td>Course English Name</td><td>Credit Hours</td></tr>';
       for($row=0;$row<count($all_courses);$row++){
           $course=$all_courses[$row];
           echo '<tr><td><input type="checkbox" name="id[]" value="'.$course->get_id().'" ';
                     if(isset ($_POST['id'])){
                                     if($_POST['id'][$row]==$course->get_id()) echo"checked";
       
                     }
                   echo '></td>';
           echo '<td>'.$course ->arabic_name.'</td><td>'.$course ->english_name.'</td><td>'.$course ->num_credit_hours.'</td></tr>';
       }
           echo '<tr><td colspan="2"><input type="submit" name="sub" value="Register"></td>';
           echo '<td colspan="2"><input type="submit" name="sub_pdf" value="get pdf"></td></tr>';
       
       
       echo '</form></table>';
       if(isset($_POST['sub'])){
           $id_data=$_POST['id'];
           $courses=array();
           for($row=0;$row<count($id_data);$row++){
           $courses[]=new class_course($id_data[$row]);
       }
           $student=new class_student($_SESSION['id']);
           $count=$student->register_course($courses, 2, 2);
           if($count==count($id_data)){
               echo 'OK';
               $student->recieve_confirmation_email_for_register_subjects();
               exit();
           }
       }
       if(isset($_POST['sub_pdf'])){
           header("location: report.php");
       }
       }
     

        ?>
      
      
    </tbody>
  </table>
                        </form>
</div>
  
                                


        
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        <script> 
        function Addproduct()
        {
            alert("Add New Product");
        }
        
        </script>
    </body>
</html> 