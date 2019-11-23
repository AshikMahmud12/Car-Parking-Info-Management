<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Parking Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
  
  #header
  {
    
  
  }
  #background {
    background-color: black;
    background: url() no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 
}
  
  #logo
  {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  #marq
  {
      font-size: 2em;
      color: blue;
  }
  
        #hov a:hover{
          background-color: maroon;
          color: white;
        }
        #actv
        {
          background-color: maroon;
          color: white;
        }
        #foot
       {
    background:black;
    color:white;
    text-align: center;
       }

       
       #visit
       {
         font-size: 2.5em;
         font-weight: bold;
         color: lightseagreen;

       }

	   div.Backgroundd {
  background: url(parkinghome.jpg) repeat;
  border: 2px solid black;
  background-size: 700px 400px
  background-repeat: no-repeat;
}
	   
  </style>
   <div class="header"></div>

</head>
<body>

       <div class="Backgroundd">
	
	
	<br>
			  <br>
			  <br>
     <!--   <div id="header" class="jumbotron content-center" style="margin-bottom: 0">  -->
                   <h1 style="color:white;">  <strong> <marquee>.....Welcome to car parking info system.....</marquee>  </strong></h1>
				   
         
              
              <br>
			  <br>
			  <br>
			  <br>
			  
				  
			  
        </div>

			  
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"><img src="logo.png" height="30px" width="30px" ></a>
                  </div>
				  
				  
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      
                      <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
                
				
				<br>
				  <br>
				  <br>
				  <br>
				  
              
              <div id="background" class="container">
                <div class="row">
                  <div class="col-md-2">
                   
                    
                    <hr class="hidden-sm hidden-md hidden-lg">
                  </div>
                  <div class="col-md-10">
                  <form method="post" action="login.php">
				  <?php echo display_error(); ?>
    <div class="form-group">
      <label for="userID">User ID</label>
      <input type="varchar" class="form-control" id="userID" placeholder="Enter User ID" name="userID" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passw">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit"  name="login_btn" class="btn btn-primary ">Submit</button>
	 Not yet a member? <a href="register.php">Sign up</a>
  </form>      
                </div>
              </div>
            </div>
            
                  <br>
				   <br>
				    <br>
					 <br>
					 <br>
				    <br>
					 <br>
				  
				  
              <div id="foot" class="jumbotron text-center" style="margin-bottom:0">
                  <font size="1" face="arial">Car info parking management system, Dhaka Bangladesh<font color="#999999">/ </font>Toll-Free Phone: ********<br />
                  CST #2029626-40 <font color="#999999">/ </font>All Site Contents &copy; 2018 <font color="#999999">/ </font>All Rights Reserved  Ashik </font></div>
              </div>
</body>
</html>