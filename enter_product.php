<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include_once 'DBConection/DbConnection.php';
    
    if(isset($_POST['submit'])){
        $column=array();
        $value=array();
        $value[]="18";
        $value[]=$_POST['name'];
        $value[]=$_POST['price'];
        $value[]=$_POST['cat_name'];
        $value[]=$_POST['pro_desc'];
        $value[]=$_POST['quntity'];
        $value[]=$_POST['sup_id'];
    $db_object=new DbConnection();
    $name=$_FILES['image']['name'];
    if(isset($name)){
        //_______________________________________________________________________Image
        $name=explode('.',$name);
        $extensions=array('jpg','png','gif','jpeg');
        if(in_array($name[1],$extensions))
         {  $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
             $value[]="$image";
          /* if($db_object->insert("product",$column,$value)){
               
           }*/
        
         }//


       /*  if(isset($_POST['submit'])){
            $name       = $_FILES['file']['name'];  
            $temp_name  = $_FILES['file']['tmp_name'];  
            if(isset($name)){
                if(!empty($name)){      
                    $location = '../uploads/';      
                    if(move_uploaded_file($temp_name, $location.$name)){
                        echo 'File uploaded successfully';
                    }
                }       
            }  else {
                echo 'You should select a file to upload !!';
            }
         }*/


       /*  $name=$_POST['name'];
         $price=$_POST['price'];
         $cat_name=$_POST['cat_name'];
         $pro_desc=$_POST['pro_desc'];
         $quntity=$_POST['quntity'];
         $sup_id=$_POST['sup_id'];
            


            
         */
         
        //echo $db_object->insert("product",$column,$value);
         if($db_object->insert("product",$column,$value)){ echo "true";}

        
    }else{
        die("Enter Medicine picture");
         }
}
    
    
   // print_r($_POST);
  // $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
   /*echo "<pre>";
   print_r($_FILES);
   echo "</pre>";
 if(empty($image))
   {echo 'true';}
   else echo 'false';*/


}
else {
    echo "SORRY For Wasting your time : you can't open this page directly";
}

    header("location:admin_home.php");
?>


