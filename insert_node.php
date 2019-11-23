<!DOCTYPE html>
<html>
<head>
<title>INSERT location</title>
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


<body>


     <div class="background">
	 
	 <br>
    <br><br>
    <br>
	

	<br>
		<br>
<form action="insert_node.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="blue">


<tr>
<td align="center"><strong>  Location:</strong></td>
<td><input type="text" name="node" placeholder="enter location name" required="required"/> </td>




<td align="center"><strong>Closest location:</strong></td>
<td><input type="text" name="cn" placeholder="enter  closest location" required="required"/> </td>
</tr>

</table>
<table align="center" bgcolor="gray">


<tr>
<td align="center"><strong>distance:</strong></td>
<td><input type="text" name="dis1" placeholder="enter distance" required="required"/> </td>
</tr> 

<tr>
<td align="center"><strong>time:</strong></td>
<td><input type="text" name="time1" placeholder="enter time" required="required"/> </td>
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
 echo $node=$_POST['node'];
  echo$cn=$_POST['cn'];
 echo $dis1=$_POST['dis1'];
 echo $time1=$_POST['time1'];



$con= mysqli_connect("localhost","root","","car_parking_info") or die ("cannot connect to database");


if (!$con)
{
	echo "couldnot connect database";
}
else {
	echo "connect database successfully";
}

	
	$insert = "INSERT INTO node_inf (node,cn,cndis,cntime)
    VALUES('$node','$cn','$dis1','$time1')";
	
	$run_insert=mysqli_query($con,$insert);
	if ($run_insert)
	{
		echo "<script>alert('YOU HAVE SUCCESSFULLY insert location!')</script>";
		echo "<script>window.open('adminpage.php','_self')</script>";
		
	}
	
	else {
		
		echo "<script>alert('YOUR DATA CANNOT INSERT INTO DATABASE')</script>";
		
	}
}

?>
<br>
    <br><br>
    <br>
		<br>
		<br><br>
    <br>
		
	<br>

	<br>
		<br>
  <br>
  
  <br>

	<br>
		<br><br>
    <br><br>
    <br>
		<br>
		<br><br>
    <br>
		
	<br>

	<br>
		<br>
  
<center>
<a  href="index.php" >Home</a>  
</center>
<br>
  
  <br>

	<br>
		<br>

</div>
</body>

</html>