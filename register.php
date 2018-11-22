<?php
session_start();

	$coni = mysqli_connect("localhost" , "root" , "" , "project")  or  die("Connection failed: ".mysqli_connect_error());

	if(preg_match('/\s/',$_POST['username']))
	{
		header("location: register_formprac.php? msgr=1");
		exit;
	}
	
	$username = mysqli_real_escape_string($coni, $_POST['username']);
	$password = mysqli_real_escape_string($coni, $_POST['password']);
	$fname = mysqli_real_escape_string($coni, $_POST['fname']);
	$lname = mysqli_real_escape_string($coni, $_POST['lname']);
	$gender = mysqli_real_escape_string($coni, $_POST['gender']);
	$address = mysqli_real_escape_string($coni, $_POST['address']);
	$email = mysqli_real_escape_string($coni, $_POST['emailid']);
	$phone = mysqli_real_escape_string($coni, $_POST['phone']);
	

	$sql = "INSERT INTO register  (Username , Password , fname , lname , Gender , Address , emailid , Phone,exam)
					   VALUES('$username' , '$password' , '$fname' , '$lname' , '$gender' , '$address' , '$email' , '$phone','0' )";
	
	if(!mysqli_query($coni , $sql))
	{
		 header("location: register_formprac.php? msgr=0");
		 exit;
	}
	
	else 
	{
	     $_SESSION['username']=$_POST['username'];
		 header("location: after_register.php?");
		 exit;
	}
mysqli_close($coni);	
?>