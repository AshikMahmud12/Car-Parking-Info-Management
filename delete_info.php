

<!DOCTYPE html>
<html>
<head>
<title>Delete  </title>
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

<br>

      <div class="background">
	  
	  <br>

<br>
<br>
<br>
<br>
<br><br><br>


<form action="delete_info.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="blue">

<!--
<tr>
<td align="center"><strong>id_number:</strong></td>
<td><input type="varchar" name="id_num" placeholder="enter id_num" required="required"/> </td>
-->



<td align="center"><strong>Enter userID:</strong></td>
<td><input type="varchar" name="userID" placeholder="enter userID" required="required"/> </td>
</tr>


<tr align="center">
<td colspan="8"> <input type="submit" name="sub" value="submit"/> </td>
</tr>

<tr align="center">
<td colspan="8"> <input type="reset"/> </td>
</tr>
</table>



<?php
if(isset($_POST['sub']))
{
//$id_num=$_POST['id_num'];
$userID=$_POST['userID'];



$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con)
{
	echo "couldnot connect database";
}
else {
	echo "connect database successfully";
}

$delete1="delete from userprofile where  userID='$userID'";
	$run_delete1=mysqli_query($con,$delete1);
	if($run_delete1)
	{
		
		//echo "<script>alert('your data cannot delete from database')</script>";
		echo "<script>alert('you have successfully  deleted your data!')</script>";
	    echo "<script>window.open('index.php','_self')</script>";
		//exit();
}
 
 else {
		
		
		//echo "<script>alert('you have successfully  deleted your data!')</script>";
		echo "<script>alert('your data cannot delete from database')</script>";
		echo "<script>window.open('index.php','_self')</script>";
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
<center>
<a  href="index.php" > <h3>Home </h3></a> 
   </center>

   
   </div>
</body>

</html>