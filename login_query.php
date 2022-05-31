<?php
	session_start();
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$inacctive= $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `account` = 'Inactive' ")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:vote.php');
		}	
			
		if($inacctive==1){
				echo " <br><center><font color= 'red' size='3'>Your account is currently Inactive</center></font>";
		}
		
		else if($voted == 1 && $inacctive == 0){
				echo " <br><center><font color= 'red' size='3'>You Can Only Vote Once</center></font>";
					
		}
			

		else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
?>