<?php  
session_start();  
$user=$_SESSION['username'];

if(!$_SESSION['username'])  
{  
    header("Location: practicephp.php");//redirect to login page to secure the welcome page without login access.  
}  

  $coni = mysqli_connect("localhost" , "root" , "" , "project")  or  die("Connection failed: ".mysqli_connect_error());
	
	$oldpassword = mysqli_real_escape_string($coni, $_POST['oldpassword']);
	$password = mysqli_real_escape_string($coni, $_POST['password']);
	$fname = mysqli_real_escape_string($coni, $_POST['fname']);
	$lname = mysqli_real_escape_string($coni, $_POST['lname']);
	$gender = mysqli_real_escape_string($coni, $_POST['gender']);
	$address = mysqli_real_escape_string($coni, $_POST['address']);
	$email = mysqli_real_escape_string($coni, $_POST['emailid']);
	$phone = mysqli_real_escape_string($coni, $_POST['phone']);

	$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
	mysql_select_db("project");

	$result = mysql_query("SELECT * FROM register where username='{$user}'");
	$row = mysql_fetch_array($result);
	if($oldpassword==$row['password'])
	{
		
		$sql = "UPDATE register SET password='{$password}', fname='{$fname}', lname='{$lname}', gender='{$gender}',
address='{$address}', emailid='{$email}', phone='{$phone}' WHERE username='{$user}'";
		
		if (mysqli_query($coni, $sql))
		{
			header("location: profile.php?msg=0");
			exit;
		}
		else 
		{
			echo "unsuccessful data insertion" . mysqli_error($con);
			header("location: edit.php?msg=0");
			exit;
		}
	}
	else
	{
		header("location: edit.php?msg=0");
		exit;
	}
mysql_close($con); 
mysqli_close($coni); 
?>
