





<!DOCTYPE html>
<html>
<head>
<title>Car parking</title>
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

<form action="detailsB.php" method="POST" enctype="multipart/form-data">
 <table align="center" bgcolor="gray">
<br>	
<br>

<br>   
       
	   <tr>   <center>  <h2>Step: 1</h2>   </center>
   <td align="center"><strong>Enter Owners UserID:</strong></td>
       <td><input type="varchar" name="userID" placeholder="enter userID" required="required"/> </td>
</tr> 
	   
      <tr align="center">	   
         <td colspan="8"> <input type="submit" name="subb" value="click"/>  </td>
      </tr>
  </table>
 
    </form>




<?php
global $location,$price,$total;



if (isset($_POST['subb']))
{
  $userID =$_POST['userID'];


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
		<td colspan="10"><h2> Detail Info. Of The User You Have Entered. </h2></td>
	</tr>
	
		<tr>
		<th>s.n</th>
		 <th>Parking slot name</th> 
		   <th> Owners userID</th>
			<th>  mail ID  </th>
			 <th>Ownersname</th>
			 <th>Location</th>
 			<th>contact NO.</th>
				<th> Available slots  </th>
					<th>  Per hour Price</th>
						<th>bkashNO</th>
							
		</tr>

<?php
	
		
          $p=  "SELECT parkingSlotName, userID ,mailID, name,location ,cntNO ,slotSize ,price ,bkashNO  FROM userprofile  WHERE  userID='$userID'  ";		  
		  
		  
		
		$run_email= mysqli_query($con,$p);
		
	
		$i=0;
		
	while ( $row=mysqli_fetch_array($run_email))
	
	{
		
		
		$parkingSlotName = $row ['parkingSlotName'];
		    
		$userID = $row ['userID'];
		$mailID = $row ['mailID'];
		$name = $row ['name'];
		$location = $row ['location'];
		$cntNO = $row ['cntNO'];
		$slotSize = $row ['slotSize'];
		$price = $row ['price'];
		$bkashNO = $row ['bkashNO'];
	    
	    $i++;
		
		
	
	?>
	
	<tr align="center">
		<td><?php echo $i ;?></td>
		
		<td><?php echo $parkingSlotName ;?></td>
		<td><?php echo $userID; ?></td>
		<td><?php echo $mailID; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $location; ?></td>
		<td><?php echo $cntNO; ?></td>
		<td><?php echo $slotSize; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $bkashNO; ?></td>
        
		
		
		</tr>

	<?php
}
	}

?>	 
	
</table>	

<br>
<br>
<br>

<br>
<br>
<form action="detailsB.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">


<tr>               <center>  <h2>Step: 2</h2>   </center>
<td align="center"><strong>Enter Owners UserID:</strong></td>
<td><input type="varchar" name="userID" placeholder="enter  userID" required="required"/> </td>
</tr> 


<tr>
<td align="center"><strong>Enter number slot  of you want to book:</strong></td>
<td><input type="number" name="nos" placeholder="Please enter positive number" required="required"/> </td>
</tr> 

 <tr align="center">
<td colspan="8"> <input type="submit" name="subbb" value="ClickForCalculate"/> </td>
</tr>  

<tr align="center">
<td colspan="8"> <input type="reset"/> </td>
</tr>
</table>

  </form>
  
<?php



 if (isset($_POST['subbb']))
{
  $nos =$_POST['nos'];
   $userID =$_POST['userID']; 
 

$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con){
	echo ",";
}
else {
	echo ".";  
	
}
 
 

?>

<table align="center">
	<tr align="center">
		<td colspan="4"><h2>   </h2></td>
	</tr>
	
		<tr>
		<th>s.n</th>
		<th> Owners UserID </th>
		<th>Parking Slot Name</th>
		<th> Per Hour price</th>
		<th> Calculated price</th>
		</tr>

<?php
	
		 $p=  "SELECT userID,parkingSlotName,price  FROM userprofile    WHERE userID='$userID' ";	
		$run_emaila= mysqli_query($con,$p);
	    
		$i=0;
	while ($row=mysqli_fetch_array($run_emaila))
	
	{
		//$seq= $row['seq'];
		$userID =$row ['userID'];
		$parkingSlotName = $row ['parkingSlotName'];
		$price = $row ['price'];
		//$parkingSlotName = $row ['parkingSlotName'];
		$i++;
		
		
	
	?>
	
	<tr align="center">
		<td><?php echo $i ;?></td>
		 <td><?php echo $userID; ?></td>
		<td><?php echo $parkingSlotName; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $price * $nos; ?></td>
		</tr>

		
		
		


<?php

}  
}
?>


<form action="detailsB.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">

<tr>
<td align="center"><strong>Enter Owners UserID:</strong></td>
<td><input type="varchar" name="userID" placeholder="enter owner  userID" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>Enter Number of slot :</strong></td>
<td><input type="varchar" name="nos" placeholder="enter number of slot " required="required"/> </td>
</tr> 


<tr align="center">
<td colspan="8"> <input type="submit" name="subbbb" value="click_for_Confirm"/> </td>
</tr>

  <center><h2> Step : 3 </h3> </center> 



</table>

</form>

<?php
if(isset($_POST['subbbb'])){

  $userID=$_POST['userID'];
    $nos =$_POST['nos'];
     

$con= mysqli_connect("localhost","root","","carparkingg_2") or die ("cannot connect to database");


if (!$con)
{
	echo ".";
}
else {
	echo ",";
}



    $insert = "UPDATE  userprofile SET  slotSize=slotSize-'$nos' WHERE userID='$userID'";
   	//$add ="INSERT INTO parkingslot (userID) VALUES('$userID')";
   //	WHERE userID='$userID'";
	
	$run_insert=mysqli_query($con,$insert);
} 
?>
	
	
	<form action="detailsA.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor="gray">

<tr>    
   <center><h2> Step : 4  </h2>  </center>
<td align="center"><strong>Enter your UserID:</strong></td>
<td><input type="varchar" name="userID" placeholder="enter your  userID" required="required"/> </td>
</tr>

<tr>
<td align="center"><strong>Enter Parking slot Name you Want to book:</strong></td>
<td><input type="varchar" name="parkingSlotName" placeholder="enter parking Slot   Name" required="required"/> </td>
</tr>
<center> <h2> Do you really  want to book? </h2> </center>

<tr align="center">
<td colspan="8"> <input type="submit" name="subbbbb" value="click_for_booking"/> </td>
</tr>


</table>
</form>



<?php

if(isset($_POST['subbbbb'])){

//$abc=$slotSize-$nos;
  $userID=$_POST['userID'];
  $parkingSlotName=$_POST['parkingSlotName'];
  
$con= mysqli_connect("localhost","root","","car_parking_info") or die ("cannot connect to database");


if (!$con)
{
	echo "couldnot connect database";
}
else {
	echo "connect database successfully";
}

	
	
	
	$query="UPDATE  parkingslot SET  parkingSlotName='$parkingSlotName'   WHERE     userID='$userID' ";
	
	$add=mysqli_query($con,$query);
	if ($add)
	{
		echo "<script>alert('YOU HAVE SUCCESSFULLY Booked  YOUR slot !')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
	}
	
	else {
		
		echo "<script>alert('YOUR do not able to book slot')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}




?>


<center>
<a  href="index.php" > <h3>Home </h3></a>
</center>

<br>
<br>
<br>
<br>
</body>
   </div>
</body>
</head>
</html>



