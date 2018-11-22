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
	<link rel="stylesheet" href="css/homehead.css">
	<link rel="stylesheet" href="css/homeimage.css">
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>

<br> <br> 
<h3 style = "color:green; text-align:center;"> <?php echo "Welcome ".$user.". You are now registered!!!"?> </h3>
<br> <br>
<?php include("homebody.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>

