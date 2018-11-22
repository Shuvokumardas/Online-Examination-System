<?php
session_start();
$_SESSION['username']="";
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
	width: 1220px;
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
<?php //include("navigator1.php"); ?>
<ul>
  <li> <a  href="http://localhost/project/practicephp.php">Home </a></li>

  <li> <a  href="http://localhost/project/contact.php">Contact </a></li>

  <li> <a  href="http://localhost/project/about.php">About </a></li>
  
  <li style="border-left: 1px solid red; border-right: none; float:right"> <a href="http://localhost/project/login_form.php#login">Login </a></li>
  
  <li style="border-left: 1px solid red; float:right"> <a href="http://localhost/project/register_formprac.php">Register </a></li>
</ul>
</br>
<?php include("homebody.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>

