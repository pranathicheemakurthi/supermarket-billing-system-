<html>
<head>
<style>
body{
	  font-style:italic;
	  color:blue;
  }
	  
  </style>
  </head>
<body bgcolor="pink" align="center" color="blue">
<form  align="center" name="f1" action="validate1.php" method="POST">
<marquee><h2>Welcome to supermarket billing system</h2></marquee>
<h2>ADMIN LOGIN</h2>
<div  style="margin-left:400px;border:px solid black;width:500px;height:500px;">
<table  align="center">
<tr>
<td align="center">
<img src="img.jpg"  height="290" width="490" alt="image not found"><br><br>
</td>
</tr>
<tr>
<td align="center">
USERNAME<input type="text" required name="uname" maxlength="25"/><br><br>
</td>
</tr>
<tr>
<td align="center">
PASSWORD<input type="password" required name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<button name="login" value="click">LOGIN</button>
</td>
</tr>
<tr><td align="center">
<a href="forget1.php" ><h3>forgotpassword?</h3></a>
</td></tr>
</table>
</div>
</form>
</body>
</html>
<?php
session_start();
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost", "root", "", "market");
		$user=$_POST['uname'];
		$pass=$_POST['pwd'];
		$res=mysqli_query( $conn, "SELECT * FROM admin WHERE username='$user' AND password='$pass' ");
		$row = mysqli_fetch_assoc($res);
		if(!$row) {
			echo "<h1>Enter valid credentials</h1>";
		}	
		else {
	        session_start();
	        $_SESSION['auser']=$user;
			header('location:insert.php');
		}
} 
?>