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
	width: 1210px;
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
<?php include("navigator1.php"); ?>
<!--</br> -->
<!--<div id="images">    -->
   <!-- <img class="mcqlogo" border="0" alt="E-Examination" src="/project/image/e-exam.gif" > -->
   <!-- <img class="mcqlogo" border="0" alt="MCQ" src="/project/image/mcq.jpg" > -->
<!</div>
<h2 style = "background-color:#eff; color:black; text-align:center;">Contact</h2>
<table  class="center1">
  <tr>
    <td rowspan="2"><b>Website Administrator</b></td>
    <td>Sakib Bin Ehsan</td>
  </tr>
  <tr>
    <td>Dept. of CSE,</br>Rajshahi Univesity of Engineering & Technology</td>
  </tr>
  <tr>
    <td><b>Email</b></td>
	<td>sakibehsan13@gmail.com</td>
  </tr>
</table>
</br>
<?php include("footer.php"); ?>

</body>
</html>
