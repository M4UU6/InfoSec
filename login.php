<?php
	session_start();
	include('config.php');
	
	if(isset($_POST['signin'])){
		extract($_POST);
		
		$email = $_POST['Email'];
		$pass = $_POST['Password'];
		
		$query="SELECT * FROM tblaccounts where Email='$email' and Password='$pass'";
		$sql = mysqli_query ($myswli, $query);
		$row = $mysqli_fetch_array($sql);
		if(is_array($row)){
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['Name'] = $row['Name'];
			$_SESSION['Email'] = $row['Email'];
			$_SESSION['Password'] = $row['Password'];
			header("Location: ui_admin_dashboard.php");
		}else{
			echo "Invalid Email or Password.";
		}
	}
?>