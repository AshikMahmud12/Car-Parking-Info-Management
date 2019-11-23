

<!DOCTYPE html>
<html>
<head>
<title>Rent </title>
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



<form action="rent.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">


<tr>
<td align="center"><strong>Enter your parkingSlot Name:</strong></td>
<td><input type="text" name="parkingSlotName" placeholder="enter your name" required="required"/> </td>
</tr> 


<tr align="center">
<td colspan="8"> <input type="submit" name="sub" value="submit"/> </td>
</tr>

<tr align="center">
<td colspan="8"> <input type="reset"/> </td>
</tr>
</table>


<?php

if (isset($_POST['sub']))
{
$parkingSlotName =$_POST['parkingSlotName'];


$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con){
	echo ".";
}
else {
	echo ":";
	
}

?>


<table align="center">
	<tr align="center">
		<td colspan="4"><h2> View current rent status  </h2></td>
	</tr>
	
		<tr>
		<th>s.n</th>
		<th>Renter ID </th>
		<th>Your parking slot name</th>
	 </tr>

	 
<?php
	
		$p= "SELECT * FROM parkingslot WHERE parkingSlotName='$parkingSlotName' ";
		$run_emaila= mysqli_query($con,$p);
	    
		$i=0;
	while ($row=mysqli_fetch_array($run_emaila))
	
	{
		//$seq= $row['seq'];
		$userID = $row ['userID'];
		$parkingSlotName = $row ['parkingSlotName'];
		$i++;
		
		
	
	?>
	
	<tr align="center">
		<td><?php echo $i ;?></td>
		<td><?php echo $userID; ?></td>
		<td><?php echo $parkingSlotName; ?></td>
	</tr>

	<?php
}                    // this is the end of while and isset.
}
?>	 


</table>


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
<br><br><br>






<center>

<a  href="index.php" > <h3>Home </h3></a>
   
   </center>
</body>

</div>
</body>

<head>


</html>
