<!DOCTYPE html>
<html lang="en">
<head>
<title>online voting sysytem</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="addvoters.css">
</head>
<body style="background-color:#008080">

<center><h2  style="color:white">Add Voter(student)</h2></center>
	
<div class="modal-body">
				<form method = "post" enctype = "multipart/form-data" class="container">	
					
					<div class="form-group">
						<label style="color:white">Registration Number</label>
							<input class="form-control" type ="text" name = "id_number" placeholder="Enter registration number" required="true">
					</div>
					
					<div class="form-group">
						<label style="color:white">Password</label>
							<input class="form-control" type ="text" name = "password" placeholder="Enter password" required="true">
					</div>
					
					<div class="form-group">
						<label style="color:white">Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Enter firstname" required="true">
					</div>
					
					<div class="form-group">
						<label style="color:white">Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label style="color:white">Year_Level</label>
							<select class = "form-control" name = "year_level">
								<option></option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>
							</br>								
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$idnumber=$_POST['id_number'];
					$password=$_POST['password'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$year_level=$_POST['year_level'];
		
					$conn->query("INSERT INTO voters(id_number,password,firstname,lastname,year_level,status,account)VALUES('$idnumber','$password','$firstname','$lastname','$year_level','Unvoted','Inactive')")or die(mysql_error());
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>
</body>
</html>
