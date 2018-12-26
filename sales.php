<?php
session_start();
  if(!(isset($_SESSION["uname"])))
  {
	  header('Location:login.html');
  }
  ?>
  <?php
  $con=new mysqli("localhost","root","","market");
  if ($con->connect_error) {
    echo("Connection failed: " . $con->connect_error);
  }
else
{
	$f1=$_SESSION["uname"];
  $sql="select * from cbill where cust='$f1'";
  //$sql='select * from cbill where ';
  $res=$con->query($sql);
  if($res->num_rows>0){
	  
	  echo "<html><head><title>SUPERMARKET BILL</title></head><body align='center' bgcolor='#f0f0b0'>";
	  echo "<h1 color='blue'><b><i>Supermarket Bill</i></b></h1>";
	  echo "<table align='right'><tr><th align=''center><a href='project.php'>Home</a></th><th><a href='login.html'>Logout</a></th></tr></table><hr>";
	  echo "<table align='right'><tr><th align='center' style='color:#0000e0;width:200px;'>Id</th><th align='center' style='color:#0000e0;width:200px;'>Customer</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 1</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Quantity</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 2</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Quantity</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>GrandTotal</th></tr>";
	  //echo "<br><hr><br><table align='center' border='1px' style='font-size:20px;'><tr><th style='color:orange;width:200px;' align='center'>ITEM 1</th><th style='color:orange;width:200px;' align='center'>Operator</th><th style='color:orange;width:200px;' align='center'>Amount</th><th style='color:orange;width:200px;' align='center'>Service</th>";
	  while($row = $res->fetch_assoc()) {
		  
		echo "<tr><td style='color:#0000e0;width:200px;' align='center'>" . $row['Id']."  "."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["cust"]."  "."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["sta"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost1"]."  "."</td><td style='color:grey;width:200px;' align='center'>" . $row["quantity1"]. "  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row['total1']."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["sta1"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost2"]."  "."</td><td style='color:grey;width:200px;' align='center'>" . $row["quantity2"]. "  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row["total2"]. " "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["grandtotal"]."  "."</td></tr>";
	  }
	  echo "</table></body></html>";
  }
  $con->close();
}

?>