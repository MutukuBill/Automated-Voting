<!DOCTYPE html>
<html lang="en">
<head>
<title>online voting sysytem</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="adminlog.css">
</head>
<body style="background-color:#008080">

    <div class="bg-img">
		<div style="background-color: teal"><center><h2 style="color:white">Welcome to Kisii University Online Voting Sytem</h2></center>
           
                        <center><h3 class="panel-title" style="color:white">Admin Log in</h3></center></div>
                    
                    
                        <form role="form" method = "post" enctype = "multipart/form-data" class="container">
                            
							
                                
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Log in your Username" name="username" type="text" autofocus>
                              
								
                                
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                               
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>

  <?php include ('script.php');?>

</body>

</html>
