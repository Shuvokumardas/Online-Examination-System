<?php  
session_start();  

if(!$_SESSION['username'])  
{  
    header("Location: login_form.php");//redirect to login page to secure the welcome page without login access.  
}  
$user=$_SESSION['username']; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<style>
	header,footer {
	padding: 1em;
	color: red;
	background-color:black;
	clear: left;
	text-align: center;
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 1205px;
	overflow: hidden;
	background-color: green;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

li {
	float: left;
	border-right: 1px solid red;
}

li a:hover {
    background-color: black;		<!-- /* Change the link color on hover */ -->
}

article {
	overflow: hidden;
}
</style>
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>

<br> <br> 
<h3 style = "color:green; text-align:center;"> <?php echo "Welcome ".$user.". You are now logged in!!!"?> </h3>
<br> <br>
<?php include("homebody.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>

