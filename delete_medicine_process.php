<?php
$conn=  mysqli_connect("localhost", "root",'',"online_medicine_shopping");
      
			$query="delete from product where pro_id =".$_GET['pro_id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			 		header("location:admin_home.php");
                  
?>