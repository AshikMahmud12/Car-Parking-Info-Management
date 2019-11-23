<!DOCTYPE html>
<html>
<head>
<title>updated location</title>
</head>
<style>
table 
{
  color:white;
 padding:10px;
 width:1500px;
 background: #5F9EA0;
 
}

body
{
padding:0;
margin:0;
background-color:white;
}

input
{
padding:5px;
}

th{
	border : 2px solid black;
}

div.background {
  background: url(parking4.jpg) repeat;
  border: 2px solid black;
  background-repeat: no-repeat;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style>



<body>        <div class="background">
<br>
<br>
<form action="updatenode_inf.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">


<tr>
<td align="center"><strong>location:</strong></td>
<td><input type="text" name="node" placeholder="enter location" required="required"/> </td>




<td align="center"><strong>Closest Location:</strong></td>
<td><input type="text" name="cn" placeholder="enter  closest location" required="required"/> </td>
</tr>

</table>
<table align="center" bgcolor="gray">


<tr>
<td align="center"><strong>Location:</strong></td>
<td><input type="text" name="node1" placeholder="enter location" required="required"/> </td>
</t>

<tr>
<td align="center"><strong>updated closest location:</strong></td>
<td><input type="text" name="cn1" placeholder="enter updated closed location " required="required"/> </td>
</tr> 

<tr>
<td align="center"><strong>updated distance:</strong></td>
<td><input type="text" name="dis1" placeholder="enter updated distance" required="required"/> </td>
</tr> 

<tr>
<td align="center"><strong>updated time:</strong></td>
<td><input type="text" name="time1" placeholder="enter updated time" required="required"/> </td>
</tr> 



<tr align="center">
<td colspan="8"> <input type="submit" name="sub" value="submit"/> </td>
</tr>

<tr align="center">
<td colspan="8"> <input type="reset"/> </td>
</tr>
</table>


<?php
if(isset($_POST['sub'])){
$node=$_POST['node'];
$cn=$_POST['cn'];
$cn1=$_POST['cn1'];
$dis1=$_POST['dis1'];
$node1=$_POST['node1'];
$time1=$_POST['time1'];



$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con)
{
	echo ".";
}
else {
	echo ",";
}

	
	$insert = "UPDATE node_inf SET node='$node1' , cn='$cn1' , cndis='$dis1' , cntime='$time1' WHERE node= '$node' and cn='$cn'";
	
	$run_insert=mysqli_query($con,$insert);
	if ($run_insert)
	{
		echo "<script>alert('you have successfully UPDATE location!')</script>";
		echo "<script>window.open('adminpage.php','_self')</script>";
		
	}
	
	else {
		
		echo "<script>alert('your data cannot insert into database')</script>";
		
	}
}

?>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br>


<br>
<br>
<br>
<br>
<br>
<br>
<center>

<a  href="index.php" > <h3>Home </h3></a>   
</center>
<br>
<br>
<br>
<br>

<br>
</div>
</body>

</html>