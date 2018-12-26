<?php
session_start();
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$con=new mysqli("localhost","root","","market");
	$sql="select * from cbill where Id='$id'";
	$res=$con->query($sql);
	//if($result=$count){
		if($res->num_rows>0){
	  echo "<html><head><title>SUPERMARKET transation</title></head><body align='center' bgcolor='#f0f0b0'>";
	  echo "<table align='right'><tr><th align=''center><a href='login.html'>Home</a></th><th><a href='login.html'>Logout</a></th></tr></table><hr>";
	  echo "<table align='right'><tr><th align='center' style='color:#0000e0;width:200px;'>Customer</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 1</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 2</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>GrandTotal</th></tr>";
       	 
	 while($row = $res->fetch_assoc()) 
	{
	   echo "<tr><td style='color:#0000e0;width:200px;' align='center'>" . $row["cust"]."  "."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["sta"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost1"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row['total1']."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["sta1"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost2"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row['total2']."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["grandtotal"]."  "."</td></tr>";
    }
	echo "</table></body></html>";
	}
	
	//else
	//{
	//	echo "Invalid user";	
	//	header('Location: transation.html');
	//}
  $con->close();
		}
?>			