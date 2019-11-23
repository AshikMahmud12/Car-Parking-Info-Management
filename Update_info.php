

<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE</title>
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


<br>
<body>
<br>

      <div class="background">
	  
	  <br>
<br>
<br>
<br><br><br>
     
<form action="Update_INFO_2.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">

<tr>
<td align="center"><strong>enter userID:</strong></td>
<td><input type="text" name="userID" placeholder="enter your userID" required="required"/> </td>
</tr> 

<tr>
<td align="center"><strong>location:</strong></td>
<td><input type="text" name="location" placeholder="enter location" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>parking Slot name:</strong></td>
<td><input type="text" name="parkingSlotName" placeholder="enter parking slot name" required="required"/> </td>
</tr> 


<tr>
<td align="center"><strong>Slot size:</strong></td>
<td><input type="number" name="slotSize" placeholder="enter slot SIze" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>price:</strong></td>
<td><input type="number" name="price" placeholder="enter price" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>contact number :</strong></td>
<td><input type="number" name="cntNO" placeholder="enter contacat number" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>bkash No:</strong></td>
<td><input type="number" name="bkashNO" placeholder="enter bkashno" required="required"/> </td>
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
$userID=$_POST['userID'];	

$location=$_POST['location'];
$parkingSlotName=$_POST['parkingSlotName'];
$slotSize=$_POST['slotSize'];
$price=$_POST['price'];
$cntNO=$_POST['cntNO'];
$bkashNO=$_POST['bkashNO'];



$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con)
{
	echo "couldnot connect database";
}
else {
	echo "connect database successfully";
}

	
	$insert = "UPDATE userprofile SET  location='$location', parkingSlotName='$parkingSlotName',slotSize='$slotSize',price='$price',cntNO='$cntNO',bkashNO='$bkashNO' WHERE userID='$userID'";
	
	$run_insert=mysqli_query($con,$insert);
	if ($run_insert)
	{
		echo "<script>alert('YOU HAVE SUCCESSFULLY UPDATED YOUR DATA!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
	}
	
	else {
		
		echo "<script>alert('YOUR DATA CANNOT BE UPDATED INTO DATABASE')</script>";
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
<center>
<a  href="index.php" > <h3>Home </h3></a>

</center><br><br>
 </div>
</body>

</html>