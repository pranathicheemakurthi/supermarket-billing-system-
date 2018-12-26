<?php
$it= $_GET['item'];
$con=new mysqli("localhost","root","","market");
  $sql="select * from items where itemname='$it'";
  $result=$con->query($sql);
  echo "<select name='sta' id='sta' onchange='getcost(this.value)'>";
while($row= $result->fetch_assoc()) {
    echo "<option value='".$row['itemtype']."'>".$row['itemtype']."</option>";
}
echo "</select>";
$con->close();
?>