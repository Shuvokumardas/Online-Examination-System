<?php  
session_start();  
$user=$_SESSION['username'];

if(!$_SESSION['username'])  
{  
    header("Location: practicephp.php");//redirect to login page to secure the welcome page without login access.  
}  
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
</br>
<?php include("homebody.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>

