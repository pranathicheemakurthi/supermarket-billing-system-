<?php
session_start();
if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pwd'];
	$con=new mysqli("localhost","root","","market");
	$sql="select * from user where username='$uname' and password='$pass'";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		//while($row=$result->fetch_assoc())
		//{
			//if($uname==$row["uname"] and $pass==$row["pwd"])
			//{
				session_start();
				$_SESSION["uname"]=$uname;
				$_SESSION["pass"]=$pass;
				header("Location:login.html");
				echo "<table><tr><td><a href=project.html>Welcome</a></td></tr></table>";
			//}
		//}
	}
	else
	{
		echo "Invalid user";	
		header('Location: log.html');
	}
}
?>