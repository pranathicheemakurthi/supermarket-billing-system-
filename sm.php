<?php
 session_start();
  if(!(isset($_SESSION["uname"])&&isset($_SESSION["pass"])))
  {
	  header('Location:login.html');
  }
 if(isset($_POST['buy']))
{
  $item1 = $_POST['sub'];
  $type1= $_POST['sta'];
  $item2 = $_POST['sub1'];
  $type2= $_POST['sta1'];
  $ct1 = $_POST['cost1'];
  $qt1= $_POST['quant1'];
  $tc1= $_POST['total1'];
  $ct2 = $_POST['cost2'];
  $qt2= $_POST['quant2'];
  $tc2 = $_POST['total2'];
  $tl=$_POST['total'];
  $s=$_SESSION['uname'];
   
  $con=new mysqli("localhost","root","","market");
  if ($con->connect_error) {
    echo("Connection failed: " . $con->connect_error);
  }
  $sql1='select * from cbill';
  $res=$con->query($sql1);
  $count=$res->num_rows;
  $count=$count+1;
  $sql="insert into cbill(Id,cust,sub,sta,cost1,quantity1,total1,sub1,sta1,cost2,quantity2,total2,grandtotal) VALUES($count,'$s','$item1','$type1',$ct1,$qt1,$tc1,'$item2','$type2',$ct2,$qt2,$tc2,'$tl')";
  $res=$con->query($sql);
   if($res==true)
      echo "values are inserted";
  else
	  echo $con->error;
  //$sql='select * from cbill';
  //$res=$con->query($sql);
  /*if($count>0){
	  echo "<html><head><title>SUPERMARKET BILL</title></head><body align='center' bgcolor='#f0f0b0'>";
	  echo "<h1 color='blue'><b><i>Supermarket Bill</i></b></h1>";
	  echo "<table align='right'><tr><th align=''center><a href='project.php'>Home</a></th><th><a href='login.html'>Logout</a></th></tr></table><hr>";
	  echo "<table align='right'><tr><th align='center' style='color:#0000e0;width:200px;'>Id</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 1</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Quantity</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 2</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Quantity</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>ITEM 3</th><th align='center' style='color:#0000e0;width:200px;'>COST</th><th align='center' style='color:#0000e0;width:200px;'>Quantity</th><th align='center' style='color:#0000e0;width:200px;'>Total</th><th align='center' style='color:#0000e0;width:200px;'>GrandTotal</th></tr>";
	  //echo "<br><hr><br><table align='center' border='1px' style='font-size:20px;'><tr><th style='color:orange;width:200px;' align='center'>ITEM 1</th><th style='color:orange;width:200px;' align='center'>Operator</th><th style='color:orange;width:200px;' align='center'>Amount</th><th style='color:orange;width:200px;' align='center'>Service</th>";
	  while($row = $res->fetch_assoc()) {
		echo "<tr><td style='color:#0000e0;width:200px;' align='center'>" . $row['Id']."  "."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["item1"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost1"]."  "."</td><td style='color:grey;width:200px;' align='center'>" . $row["quantity1"]. "  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row['total1']."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["item2"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost2"]."  "."</td><td style='color:grey;width:200px;' align='center'>" . $row["quantity2"]. "  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row["total2"]. " "."</td><td style='color:#0000e0;width:200px;' align='center'>" . $row["item3"]."  "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["cost3"]."  "."</td><td style='color:grey;width:200px;' align='center'>" . $row["quantity3"]. "  "."</td><td style='color:#04e805;width:200px;' align='center'>" .$row["total3"]. " "."</td><td style='color:#04e805;width:200px;' align='center'>" . $row["grandtotal"]."  "."</td></tr>";
	  }
	  echo "</table></body></html>";
  }*/
  $con->close();
  header('Location:sales.php');
}

?>