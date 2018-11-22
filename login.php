<?php
session_start();//session starts here 

if(isset($_POST['submit'])){	
	$user = $_POST['username'];
	$password = $_POST['password'];
	
	$user = stripcslashes($user);
	$password = stripcslashes($password);
	$user = mysql_real_escape_string($user);
	$password = mysql_real_escape_string($password);// eliminates unnecessary characters
	
	// database connection
	mysql_connect("localhost" , "root" , "") or die("Failed to query database " .mysql_error());
	mysql_select_db("project");

	$result = mysql_query("SELECT * FROM register WHERE username = '$user' AND password = '$password'")
				or die("Failed to query database " .mysql_error());
				
	$row = mysql_fetch_array($result);
	
	if($row['username'] == $user && $row['password'] == $password)
	{
		$_SESSION['username']=$_POST['username'];
		header("location: after_login.php?");
		exit;
	}
	else 
	{
		header("location: login_form.php? msgl= 0");
		exit;
	}
}
	
?>
	
	
	