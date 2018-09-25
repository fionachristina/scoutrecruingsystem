<?php include('config.php') ?>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js">
</script>

<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>

<html lang="en">
 
   <head> 
        
<meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="stylesheet" type="text/css" href="signup.css">

        
<!-- Website CSS style -->
        
<link rel="stylesheet" type="text/css" href="assets/css/main.css">

        
<!-- Website Font style -->
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        
<!-- Google Fonts -->
        
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
            
<!--
            CSS
            ============================================= -->
           
<link rel="stylesheet" href="css/linearicons.css">=
            
<link rel="stylesheet" href="css/font-awesome.min.css">
            
<link rel="stylesheet" href="css/magnific-popup.css">
            
<link rel="stylesheet" href="css/nice-select.css">
            
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            
<link rel="stylesheet" href="css/bootstrap.css">
            
<link rel="stylesheet" href="css/main.css">
            
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style type="text/css">

            body{ font: 14px sans-serif; }

            .wrapper{ width: 350px; padding: 20px; }                

        </style>
<title>Signup page</title>
    
</head>


<header class="default-header">
                
<div class="container">
                    
<div class="header-wrap">
                        
<div class="header-top d-flex justify-content-between align-items-center">
                            
<div class="logo">
                                
<a href="#home"><img src="img/logo.png" alt=""></a>
                            
</div>
                            
                   
</div>
                        
</div>
                    
</div>
            
</header>  

    <body>


 <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">Sign up</h1>
                        <hr />
                    </div>
                </div> 
            </div>
        </div>
                
     



 <div class="main-login main-center" style="padding:5%">
	
	<form class="form-horizontal" method="post" action="config.php">

		<div class="form-group">
			 <label for="username" class="cols-sm-2 control-label">Username</label><br>
			<input type="text" class="form-control" name="username" placeholder="Enter your Username" value="<?php echo $username; ?>">
		</div>
		
		<div class="form-group">
			<label class="cols-sm-2 control-label">User type</label><br>
			<center><select name="user_type" class="form-control" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select></center>
		</div>
		<div class="form-group">
			<label class="cols-sm-2 control-label">Password</label><br>
			<input type="password" class="form-control" name="password_1" placeholder="Enter your Password">
		</div>
		<div class="form-group">
			<label class="cols-sm-2 control-label">Confirm Password</label><br>
			<input type="password" class="form-control" name="password_2" placeholder="Confirm your Password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="register_btn">Sign up</button>
		</div>

		<p>Already have an account?<a href="adminlogin.php">Login</a></p> 
	</form>
</div>    
</div>
</div>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

    </body>

    </html>