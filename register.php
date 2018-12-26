<?php
 if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];
  $con=new mysqli("localhost","root","","market");
  $sql="INSERT INTO user(username, password,email) VALUES ('$uname','$pwd','$email')";
  if($con->query($sql)==true)
  {
	  echo "Registered successfully";
	  header("Location:log.html");
  }
  else
  {
	  header("Location:register.html");
  }
	 
  $con->close();
 }
?>