<?php
/*$conn=  mysqli_connect("localhost", "root",'');
if($conn){
    $select_db=  mysqli_select_db($conn,"new1");
}*/
$conn=  mysqli_connect("localhost", "root",'',"online_medicine_shopping");
$r=mysqli_query($conn,"SELECT * FROM `order`");

?>
<table border="1" style="border-color:gray ; width:800px ;" >
<thead >
<tr style="background-color:#03a9f4 ;color:white;">
	<th style="text-align: center;">order Id</th>
	<th style="text-align: center;">order date</th>
	<th style="text-align: center;">Adress</th>
	<th style="text-align: center;">customer id</th>
	<th style="text-align: center;">product id</th>
</tr>
</thead>

<tbody>
<?php

while($res=mysqli_fetch_array($r))
{

echo "<tr >";
echo "<td style='text-align:center'>".$res['ord_id']."</td>";
echo "<td style='text-align:center'>".$res['order_date']."</td>";
echo "<td style='text-align:center'>".$res['address']."</td>";
echo "<td style='text-align:center'>".$res['customer_id']."</td>";
echo "<td style='text-align:center'>".$res['product_id']."</td>";
echo"</tr>";

}
</table>
?>

<form action="data.php" method="GET">
<br>
<label> User ID :</label>
<input type="text" name="us">
<input type="submit" value="search" name="submit">

</form>

<table border="1" style="border-color:gray ; width:800px" >





<thead>

<tr style="background-color:#03a9f4;color:white"><th>order Id</th><th>order date</th><th>Adress</th><th>customer id</th><th>product id</th></tr></thead>

<tbody>

<?php

 $user=$_GET['us'];
 $qry="SELECT * FROM `order` where product_id like '%$user%' ";
 $rp=mysqli_query($conn,$qry);
 while($rs=mysqli_fetch_array($rp))
{

  echo "<tr>";
  echo "<td style='text-align:center'>".$rs['ord_id']."</td>";
  echo "<td style='text-align:center'>".$rs['order_date']."</td>";
  echo "<td style='text-align:center'>".$rs['address']."</td>";
  echo "<td style='text-align:center'>".$rs['customer_id']."</td>";
  echo "<td style='text-align:center'>".$rs['product_id']."</td>";
  echo"</tr>";
  

}
