<?php  
session_start();  
$user=$_SESSION['username'];

if(!$_SESSION['username'])  
{  
    header("Location: homeabout.php");  
}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/table.css">
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
	width: 1200px;
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
</br>
<!--<div id="images">    -->
    <!--<img class="mcqlogo" border="0" alt="E-Examination" src="/project/image/e-exam.gif" > -->
    <!--<img class="mcqlogo" border="0" alt="MCQ" src="/project/image/mcq.jpg" > -->
<!--</div> -->
<h2 style = "background-color:#eff; color:black; text-align:center;">Project Info</h2>
<table  class="center1">
  <tr>
    <td><b>Course No</b></td>
	<td>CSE 3100</td>
  </tr>
  <tr>
    <td><b>Project Name</b></td>
	<td>Online Examination</td>
  </tr>
  <tr>
    <td><b>Language</b></td>
	<td>HTML, CSS, MYSQL</td>
  </tr>
</table>

</br>

</br>
<h2 style = "background-color:#eff; color:black; text-align:center;">Project Submitted By:</h2>
<table  class="center1">
  <tr>
    <td><b>Name</b></td>
	<td>Sakib Bin Ehsan</td>
  </tr>
  <tr>
    <td><b>Roll No</b></td>
	<td>133010</td>
  </tr>
<tr>
    <td><b>Academic Year</b></td>
	<td>3rd year, 5th semester</td>
  </tr>
  <tr>
    <td><b>Department</b></td>
	<td>Dept. of Computer Science & Engineering</td>
  </tr>
  <tr>
    <td><b>University</b></td>
	<td>Rajshahi Univesity of Engineering & Technology</td>
  </tr>
</table>
</br>
<?php include("footer.php"); ?>

</body>
</html>

