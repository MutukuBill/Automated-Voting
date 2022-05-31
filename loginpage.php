<!DOCTYPE html>
<html lang="en">
<head>
<title>online voting sysytem</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="loginpage.css">
</head>
<body style="background-color:#008080">
<div class="bg-img">
  
		
		<div style="background-color: teal"><center><h2 style="color:white" >Welcome to Kisii University Online Voting Sytem</h2></center>
          
                        <center><h3 class="panel-title" style="color:white">Student Log in</h3></center></div>
   
                        <form role="form" method = "post" enctype = "multipart/form-data" class="container" >
                            
							
                                
									<label for = "username" >ID no</label>
										<input class="form-control" placeholder="Please Log in your Username" name="idno" type="text" required = "required" autofocus>
                                
								
                                
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                               
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            
							
									<?php include ('login_query.php');?>
                        </form>
                    
                </div>
     

  <?php include ('script.php');?>

</body>

</html>
