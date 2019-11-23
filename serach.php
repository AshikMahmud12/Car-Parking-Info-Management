<!DOCTYPE html>
<html>
<head>
<title>Car parking</title>






</head>
<style>

  #header
  {
 color: rgb(240, 240, 240);  
  }



table 
{
  color:white;
 padding:10px;
 width:1500px;
 background:#5F9EA0;
 
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

 <!--div.Backgroundd {
  background: url(parking2.jpg) repeat;
  border: 2px solid black;
  background-size: 400px 400px
  background-repeat: no-repeat;
}

-->



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

   <div id="header" >
   
   </div>
<br>
<br>
<br>

            
<form action="serach.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">


<tr>
<td align="center"><strong>  Enter location:</strong></td>
<td><input type="text" name="location" placeholder="enter location" required="required"/>  <br>
<br>   </td>

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
$location =$_POST['location'];


$con= mysqli_connect("localhost","root","","car_parking_info") or die ("cannot connect to database");


if (!$con){
	echo ".";
}
else {
	echo ":";
	
}

?>


<table align="center">
	<tr align="center">
		<td colspan="6"><h2>View all Car parking slots in the location you have entered </h2></td>
	</tr>
	
		<tr>
		<th>s.n</th>
		<th>Owners name</th>
		<th>Owners userID</th>
		<th>Location </th>
		<th>parking slot name</th>
		<th>Details</th>
		</tr>

<?php
	
		$p= "SELECT name,userID,location,parkingSlotName FROM userprofile WHERE location='$location' ";
		$run_email= mysqli_query($con,$p);
	    
		$i=0;
	while ($row=mysqli_fetch_array($run_email))
	
	{
		//$seq= $row['seq'];
		$name = $row ['name'];
		$userID = $row ['userID'];
		$location=$row ['location'];
		$parkingSlotName = $row ['parkingSlotName'];
		$i++;
		
		
	
	?>
	
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $userID; ?></td>
        <td><?php echo $location; ?></td>
		<td><?php echo $parkingSlotName ;?></td>
		<td>  
		<a   href="detailsA.php" > click here </a> 
	    </td>
		</tr>

	<?php
}                    // this is the end of while and isset.
}
?>	 

	
</table>	


<br>
<br>
<br>


<?php

if (isset($_POST['sub']))
{
	$location =$_POST['location'];
    

$con= mysqli_connect("localhost","root","","car_parking_info") or die ("cannot connect to database");


if (!$con){
	echo ",";
}
else {
	echo ".";
	
}

?>

   <div class="transbox">

  <strong>
<?php
	
		$p= "SELECT * FROM  node_inf WHERE node='$location' ORDER BY cndis+cntime DESC";
		$run_email= mysqli_query($con,$p);
	    
		$i=0;
	while ($row=mysqli_fetch_array($run_email))
	
	{
		 
        $cn=$row['cn'];
		$cndis=$row['cndis'];
		$cntime=$row['cntime'];
		$i++;
		  
		  
		
		echo "...........:Location ---->CloseArea---->CloseAreaDis.----> CloseAreaTime <br> ";
		echo ".............:".$location."------->".$cn."----------->".$cndis."---------------->".$cntime."<br>";
		
	?>
	
	
	<?php 
}              // these are the ending of while and isset.
   
}

?>
	
		</strong>
		</div>
<br>
<br>
<br>		
 
	<?php

if (isset($_POST['sub']))
{
	$location =$_POST['location'];
    

$con= mysqli_connect("localhost","root","","car_parking_info") or die ("cannot connect to database");


if (!$con){
	echo ",";
}
else {
	echo ".";
	
}  

?>

<table align="center">
	<tr align="center">
		<br/><td colspan="8"><h2>YOU MAY CONTACT WITH THEM (Close Area SLots)</h2></td>
	</tr>
	
		<tr>
		<th>s.n</th>
		<th> Owners name</th>
		<th> Owners UserID</th>
		<th>Location</th>
		<th>parking_slot_name</th>
		<th>Details</th>
		</tr>


<!--
<?php

?>
	-->	
		
		
<?php





//$p= "SELECT * FROM users WHERE area='$cn' and blood = '$blood' ";
 	//$p= "SELECT * FROM users WHERE area='$area' AND blood='$blood' ";
	$p= "SELECT name,userID,location, parkingSlotName FROM userprofile WHERE   location in (SELECT cn FROM userprofile, node_inf WHERE    node = '$location'  ORDER BY cndis+cntime DESC )";
	$run_emailb= mysqli_query($con,$p);
	    
		$i=0;
	while ($row=mysqli_fetch_array($run_emailb))
	
	{
		//$id= $row['id'];
		$name = $row ['name'];
		$userID = $row ['userID'];
        $location = $row ['location'];
		$parkingSlotName = $row ['parkingSlotName'];
		
		$i++;
		
		
	
	?>
	
	<tr align="center">
		<td><?php echo $i ;?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $userID; ?></td>
		<td><?php echo $location; ?></td>
		<td><?php echo $parkingSlotName ;?></td>
		 <td>  <a href="detailsB.php">click here </a>  </td>
		</tr>
<?php 
}           // this is the end of while and isset.
}

?>
</table>


 </table> 
 
 
 
 
 
 <br>
 <br>
 <br>
 <br>
 <br><br><br>
 <br>
 <br><br><br><br>
 <center>

<a  href="index.php" > <strong> <h2>Home </h2> </strong></a>
   </center>
     
	 
	 
</body>

</body>


</div>
  
<head>

</html>