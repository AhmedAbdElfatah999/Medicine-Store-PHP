<?php
//this file to help user to connect to the database
$DB_Server='localhost';
$DB_username='root';
$DB_password='';
$DB_name='online_medicine_shopping';

 session_start();
 extract($_POST);
 extract($_SESSION);


$link=mysqli_connect($DB_Server,$DB_username,$DB_password,$DB_name);
//if there is a problem
if(mysqli_connect_errno()){
echo "error : disconnected ";

}
//login query
if(isset($_POST['login'])){
 $username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
    

$sql_stmt="SELECT * FROM `user` WHERE username = '$username' AND password ='$password'";

$result=mysqli_query($link,$sql_stmt);

$row=mysqli_fetch_array($result);

}

if(!empty($row))
			{
				$_SESSION['username']=$row['username'];
				$_SESSION['id']=$row['id'];
				
				if($_POST['password']==$row['password'] and $row['type']==1)
				    {

				
					
						header("location:admin_home.html");
					}
					elseif ($_POST['password']==$row['password'] and $row['type']==2) {
				   header("location:user_account.html");
					}
				
					
				}
				
				else
				{
					header("location:login.html");
				}
			
		



	
	



if(isset($_POST['save_registered'])){
	$username=trim($_POST['user_name']);
	$password=trim($_POST['newpassword']);
	$email=trim($_POST['newemail']);
	
	$firstname=trim($_POST['firstname']);
    $lastname=trim($_POST['lastname']);
    $telephone=trim($_POST['telephone']);
    $address=trim($_POST['address']);


	


	
	$sql1="INSERT INTO `user` (`id`, `password`, `username`, `f_name`, `l_name`, `address`, `email`, `phone`, `type`) VALUES (NULL, 
	'$password',
	'$username', 
	'$firstname', 
	'$lastname', 
	'$address', 
	'$email', 
	'$telephone',  
	'2')";



	

	mysqli_query($link,$sql1);
session_start();




$_SESSION['username']=$_POST['user_name'];
$_SESSION['password']=$_POST['newpassword'];

header("home.html");
}
else{
//header("location:register.html");
}
























?>




