
<?php include('function.php') ?>

<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

	</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>



<form method="post" action="register.php">
     <?php echo display_error(); ?>
	<!-- <div class="input-group">
		<label>UserID</label>
		<input type="varchar" name="userID" value="<?php echo $userID; ?>">
	</div>
	-->
	 
	 <div class="input-group"> 
	<div <?php if (isset($userID_error)): ?> class="form_error" <?php endif ?> >
	  <label>UserID</label>
	  <input type="varchar" name="userID" placeholder="User ID " value="<?php echo $userID; ?>">
	  <?php if (isset($userID_error)): ?>
	  	<span><?php echo $userID_error; ?></span>
	  <?php endif ?>
  	</div>
	  </div>
	
	
	
	
	
	<!--
	<div class="input-group">
		<label>mailID</label>
		<input type="varchar" name="mailID" value=" <?php// echo $mailID; ?>">
	</div>
	 -->
	 
	 <div class="input-group"> 
	<div <?php if (isset($mailID_error)): ?> class="form_error" <?php endif ?> >
      <label>mailID</label>
      <input type="varchar" name="mailID" placeholder=" enter Email" value="<?php echo $mailID; ?>">
      <?php if (isset($mailID_error)): ?>
      	<span><?php echo $mailID_error; ?></span>
      <?php endif ?>
  	</div>
	
	
	
	
	
	
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	  
	   
	   <div class="input-group">
		<label>name</label>
		<input type="text" name="name"value="<?php echo $name; ?>">
		
	</div>
	
	
	<div class="input-group">
		<p>gender</p><br>
		Male:<input type="radio" name="gender"value="male"><br>
		<br>
		Female:<input type="radio" name="gender"value="female"><br>
	</div>
	
	
	
	   <div class="input-group">
		<label>location</label>
		<input type="text" name="location"value="<?php echo $location; ?>">
		
	</div> 
	
	 
	   <div class="input-group">
		<label>parking Slot name </label>
		<input type="text" name="parkingSlotName"value="<?php echo $parkingSlotName; ?>">
		
	</div> 
	 
	 
	 <div class="input-group">
		<label>Slot Size</label>
		<input type="number" name="slotSize"value="<?php echo $slotSize; ?>">
		
	</div> 
	
	
	  <div class="input-group">
		<label>price</label>
		<input type="number" name="price"value="<?php echo $price; ?>">
		
	</div> 
	   
	   <div class="input-group">
		<label>contact No.</label>
		<input type="number" name="cntNO"value="<?php echo $cntNO; ?>">
		
	</div> 
	
	  <div class="input-group">
		<label>Bkash NO</label>
		<input type="number" name="bkashNO"value="<?php echo $bkashNO; ?>">
		
	</div> 
	  
	   
	  

     <div class="input-group">
		<label>User_type</label>
		<input type="varchar" name="user_type">
	</div>	  
	
	
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>