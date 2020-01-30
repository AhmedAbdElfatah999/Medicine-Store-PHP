<?php
session_start();
require('config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['category']) || empty($_POST['medicine_mname']) || empty($_POST['company'])|| empty($_POST['price']) || empty($_POST['description']) || empty('photo'))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		
		else
		{	

			//move_uploaded_file(filename, destination)

			move_uploaded_file($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
            //for saving in the database
			$photo = "images/".$_FILES['photo']['name'];	
		
			$medicine_name=$_POST['name'];
			$medicine_category=$_POST['category'];
			$medicine_desc=$_POST['description'];
			$company=$_POST['company'];
		    $price=$_POST['price'];
			
			
			
		
			//insert to the database query

			$query="insert into ('','','','','','','') values (
                    '$medicine_name',
                    '$medicine_category',
                    '$medicine_desc',
                    '$company',
                    '$price',
                    '$photo'


		             )";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addbook.html");
		
		}
	}
	else
	{
		header("location:admin_home.html");
	}
?>