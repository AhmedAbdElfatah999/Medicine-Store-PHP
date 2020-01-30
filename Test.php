<?php

/*$host="localhost";
 $username="root";
 $password="";
$db_name="test_db";//your database name
 if ($connection = mysqli_connect($host, $username, $password,$db_name)) {
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $image=addslashes(file_get_contents($_FILES['image1']['tmp_name']));
    
        if(mysqli_query($connection,"INSERT INTO `product` (image) VALUES('$image')")){
             echo"Done";
            }
    }
}else {
    die("Database connection error"); 
}
mysqli_close($connection);
session_start();
$_SESSION['cart']=array('17',"18",'19');
//$_SESSION['cart'][0]=17;
echo "product 1 id is "+$_SESSION['cart'][1];

$host="localhost";
 $username="root";
 $password="";
 $Valuex=array();
$db_name="medicine_shopping_db";//your database name
if ($connection = mysqli_connect($host, $username, $password,$db_name)) {

    $Value=mysqli_query($connection,"SELECT * FROM `user` WHERE id='2' ");
    echo "<pre>";
print_r($Value);
echo "</pre>";

    if(mysqli_num_rows($Value)==1)
    echo TRUE;
    $v =$Value;




while ($row = mysqli_fetch_assoc($Value)) {
    $Valuex[] = $row;
}
$Value2=$Valuex;
//$Value=mysqli_fetch_assoc($Value);
echo "<pre>";
print_r($Value2);
echo"</pre>";
//echo $Value2[1][Id];
  
} else {
        die("Database connection error"); 
}
mysqli_close($connection);
*/ 
?>

<!DOCTYPE html>
<html>
    <body>
    
    <table>
    <form  action="enter_product.php" method="post" name="login" enctype="multipart/form-data">
                 <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" required="required"    >
                </td>
            </tr>
             <td>
                  Password
                </td>
                <td>
                    <input type="text" name="password" required="required"    >
                </td>
            </tr>
            <td>
                  Upload
                </td>
                <td>
                    <input type="file" name="image" >
                </td>
            </tr>
             <td>
                 <input type="checkbox" name="remember" >
                </td>
                <td >
                    Remember me!
                </td>
            </tr>
            <td colspan="2" >
                <input type="submit" name="submit" value="LogIn">
                </td>
                
            </tr>
            
            </form>
           
        </table>

    </body>
</html>
<!--<form action="enter_product.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br><br>
<input type="submit" value="submit" name="submit">
</form>-->