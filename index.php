<?php 
	include('function.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
	}
	
?>
<!DOCTYPE html>
<html>
<head>




  <style>
    #header
  {
    
  
  }
  
   #foot
       {
    background:black;
    color:white;
    text-align: center;
       } 
 
 
 
  div.Backgroundd {
  background: url(parking4.jpg) repeat;
  border: 2px solid black;
  background-size: 400px 400px
  background-repeat: no-repeat;
}
  
  </style>
      



  
  
  <br>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
	
	</head>
<body bgcolor="#000000">


   
	
	
 
        <div class="Backgroundd">
		<br>
		<br>
  <br>
  <br>
  
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="download.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['userID']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	
	</div>
	
	<br>
	
    <center>
<table   width="1000" border="0" bgcolor="#999999">
		
			<tr>
				
				
			
			</tr>
			
			<tr>
				
				<td colspan="3" align="center"><font color="#WWWWW"><a href="index.php">Home</a> &nbsp; &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp;&nbsp; <a href="serach.php">Search Slot</a>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <a href="Update_info.php"> Update_info</a>  &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <a href="delete_info.php"> Delete_info</a> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <a href="rent.php">Rent Status. </a> </font> <hr align="center" width="70%" /> </td> 
			
			</tr>
			
			
			
			
		</table>
		<center>
		
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
		<br>
		<div id="foot" class="jumbotron text-center" style="margin-bottom:0">
		
		
  
	 </div>
	 
	 
	 <br>
  <br>
		<br>
  <br>
     
	 <br>
		<br>
  <br>
	  </div>
</body>
</html>