<html>
<body bgcolor="cyan" text="red">
<div style="margin-left:150px;border:2px dashed blue;width:700px;float:left;top:200px">
<form align="center" name="f1" method="POST" action="insert.php">
<table align="center">
<tr>
<td>
<h2>itemname</h2>
</td>
<td>
<input type="text" name="itemname" size="30">
</td>
</tr>
<tr>
<td>
<h2>itemtype</h2>
</td>
<td>
<input type="text" name="itemtype" size="30">
</td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
<input type="reset" name="reset" value="RESET">
</form>
</body>
</html>









<?php
if(isset($_POST['submit']))
{
	$it=$_POST['itemname'];
	$itty=$_POST['itemtype'];
	$con=new mysqli("localhost","root","","market");
	$sql="insert into items(itemname,itemtype)
	values('$it','$itty');";
	if($con->query($sql)==true)
	{
		echo "details entered into the database successfully";
	}
	else
	{
		echo "error:".$sql."<br".$con->error;
	}
	$con->close();
}
?>
	