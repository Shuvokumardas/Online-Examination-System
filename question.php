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
	<style>
	body {
    background-color:#eee;
	}
	</style>
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>

<h1 style = "background-color:white; color:black; text-align:center;">Computer Science</h1>
<h3 style="text-align: center;"><a href="test.php?msgq=computer_science_1">Question 1</a></h3>
<h3 style="text-align: center;"><a href="test.php?msgq=computer_science_2">Question 2</a></h3>
<h3 style="text-align: center;"><a href="test.php?msgq=computer_science_3">Question 3</a></h3>

<!--<h1 style = "background-color:white; color:black; text-align:center;">Sports</h1> -->
<!--<h3 style="text-align: center;"><a href="test.php?msgq=sports_1">Question 1</a></h3> -->
<!--<h3 style="text-align: center;"><a href="test.php?msgq=sports_2">Question 2</a></h3> -->
<!--<h3 style="text-align: center;"><a href="test.php?msgq=sports_3">Question 3</a></h3>  -->
<?php include("footer.php"); ?>

</body>
</html>

