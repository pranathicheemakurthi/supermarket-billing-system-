<?php
//Connect to DB
$db =new mysqli("localhost","root","","market");


//Get ID from request
$count = isset($_GET['Id']) ? (int)$_GET['Id'] : 0;

//Check id is valid
if($count > 0)
{
    //Query the DB
    $resource = mysql_query("SELECT * FROM cbill WHERE Id ='$count'");
    if($resource === false)
    {
        die("Database Error");
    }

    if(mysql_num_rows($resource) == 0)
    {
        die("No User Exists");
    }

     while($row = mysql_fetch_array($resourse, MYSQL_ASSOC)) {
      echo "Customer Id :{$row['cust']}  <br> ".
        "Customer Name : {$row['grandtotal']} <br> ";
        // "Customer Bill : {$row['cust_bill']} <br> ";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($db);
}
