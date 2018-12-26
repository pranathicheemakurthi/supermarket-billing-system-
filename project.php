<?php
  session_start();
  if(!(isset($_SESSION["uname"])))
  {
	  header('Location: login.html');
  }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back.css">
<title>SUPERMARKET BILLING SYSTEM</title>
<script>
  function study(str){
	  var item=document.getElementById("sub").value;
    if (str == "") {
        document.getElementById("sta").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sta").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getitems.php?item="+item,true);
        xmlhttp.send();
    }
	
  }
  /*function studytot(){
   var a=f.cost1.value=0;
   var a1=parseInt(a);
   var b=f.quant1.value=0;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total1.value=c;
   var a2=f.total2.value;
   var a3=parseInt(a2);
   var b2=f.total3.value;
   var b3=parseInt(b2);
   var d=c+a3+b3;
   f.total.value=d;
  }
  } */
  function study1(str){
	  var item=document.getElementById("sub1").value;
    if (str == "") {
        document.getElementById("sta1").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sta1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getitems.php?item="+item,true);
        xmlhttp.send();
    }
  }
	  
  function studytot(){
   var a=f.cost1.value;
   var a1=parseInt(a);
   var b=f.quant1.value;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total1.value=c;
  }
  function studytot1(){
   var a=f.cost2.value;
   var a1=parseInt(a);
   var b=f.quant2.value;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total2.value=c;
  }
  function functionf(){
   var x=parseInt(document.getElementById("t1").value);
   //alert(x);
   var y=parseInt(document.getElementById("t2").value);
   document.getElementById("t").value=(x+y);
  }
   
 
  function display(){
   if(document.getElementById('t1').value != 0){
   document.getElementById('i11').innerHTML=document.getElementById('std').value;
   document.getElementById('i12').innerHTML=document.getElementById('c1').value;
   document.getElementById('i13').innerHTML=document.getElementById('q1').value;
   document.getElementById('i14').innerHTML=document.getElementById('t1').value;
   }else{
    document.getElementById('tr1').style.display= 'none';
   }
   if(document.getElementById('t2').value != 0){
   document.getElementById('i21').innerHTML=document.getElementById('fd').value;
   document.getElementById('i22').innerHTML=document.getElementById('c2').value;
   document.getElementById('i23').innerHTML=document.getElementById('q2').value;
   document.getElementById('i24').innerHTML=document.getElementById('t2').value;
   }else{
    document.getElementById('tr2').style.display= 'none';
   }
   if(document.getElementById('t3').value != 0){
   document.getElementById('i31').innerHTML=document.getElementById('fn').value;
   document.getElementById('i32').innerHTML=document.getElementById('c3').value;
   document.getElementById('i33').innerHTML=document.getElementById('q3').value;
   document.getElementById('i34').innerHTML=document.getElementById('t3').value;
   }else{
    document.getElementById('tr3').style.display= 'none';
   }
   document.getElementById('i41').innerHTML=document.getElementById('t').value;
   /*var x = document.getElementById("d");
    if (x.style.display === "none") {
        x.style.display = "block";
    } */
  }
  function  functionf1() 
{

if(document.getElementById("q1").value >=45)
 {
alert('Quantity Exeded'); 
document.getElementById("q1").value=0;
}
}
function  functionf2() 
{

if(document.getElementById("q2").value >=45)
 {
alert('Quantity Exeded');
document.getElementById("q2").value=0;
}
}

function  functionf3() 
{

if(document.getElementById("q3").value >=45)
 {
alert('Quantity Exeded'); 
document.getElementById("q3").value=0;
}
}
</script>
</head>
<body bgcolor="pink">
<br><br>
<h1 align=center color=blue><i>SUPERMARKET BILLING SYSTEM</i></h1>
welcome <?php echo $_SESSION["uname"]; ?><br><br> 
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="insert.php" target="f3" >InsertItems</a>
</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td>
<a href="transaction.html" target="f3">transaction</a>
</td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td>
<a href="overall.php" target="f3" >overall Transaction</a>

</td></td>
<p align='right'><a href='login.html'>logout</a></p>
<hr><br><br>
<form name=f method="post" action="sm.php">
<table name="list" align="center">
<tr>
<td width="250" align="center"><h2>catagory</h2></td>
<td width="250" align="center"><h2>Item</h2></td>
<td width="250" align="center"><h2>Cost</h2></td>
<td width="250" align="center"><h2>Quantity</h2></td>
<td width="250" align="center"><h2>Total Cost</h2></td>
</tr>

<tr>
<td width="250" align="center">
<?php
$con=new mysqli("localhost","root","","market");
  $sql="select distinct(itemname) from items;";
  $result=$con->query($sql);
echo "<select name='sub' id='sub' onchange='study(this.value)'>";
while($row= $result->fetch_assoc()) {
    echo "<option value='".$row['itemname']."'>".$row['itemname']."</option>";
}
echo "</select></td>";
?>
<td width="250" align="center">
<select style="width:100;" name="sta" id="sta">

</select></td>
<td width="250" align="center">
	<input type="text" id='c1' name="cost1" value="0">
</td>
<td width="250" align="center">
	<input type="text" id='q1' name="quant1" value="0" onchange=functionf1() onblur="studytot()">
</td>
<td width="250" align="center">
	<input type="text" id='t1' name="total1" value="0" readonly>
</td>
</tr>
<tr>
<td width="250" align="center">
<?php
$con=new mysqli("localhost","root","","market");
  $sql="select distinct(itemname) from items;";
  $result=$con->query($sql);
echo "<select name='sub1' id='sub1' onchange='study1(this.value)'>";
while($row= $result->fetch_assoc()) {
    echo "<option value='".$row['itemname']."'>".$row['itemname']."</option>";
}
echo "</select></td>";
?>
<td width="250" align="center">
<select style="width:100;" name="sta1" id="sta1">

</select></td>
<td width="250" align="center">
	<input type="text" id='c1' name="cost2" value="0" >
</td>
<td width="250" align="center">
	<input type="text" id='q1' name="quant2" value="0" onchange=functionf1() onblur="studytot1()">
</td>
<td width="250" align="center">
	<input type="text" id='t2' name="total2" value="0" readonly>
</td>
</tr>

<tr align="center"><td></td><td></td><td></td>
<td>Total Amount:</td>
<td><input type="text" name="total" id='t' value="0" onfocus=functionf()></td></tr>

</table>

<center>
<input style="width:100;height:30;background-color:#00ff00;" type="submit" name="buy" value="Buy"></button>
</center>

<br><hr>
</form>

</body>
</html>