<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#0022ff;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;"><i class = "fa fa-home fa-large" > </i> Kisii University</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from administrator where ID ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i class="fa fa-cog fa-spin fa-fw"></i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?>
                          
                    </a>
                   
                
                </li>
           
            </ul>
			<?php }?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Candidate List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mainadmcandidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-users"></i> Voters List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mainadminvoters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                        <li>
                            <a href="mainadmcanvassing.php"><i class="fa fa-download fa-fw"></i> Canvassing Report</a>
                        </li>
                       
                       
                       
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mainadmuser.php"> <i class = "fa fa-users" ></i> View User</a>
                                </li>
                                <li>
                                    <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>