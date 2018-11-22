<?php
session_start();
$_SESSION['username']="";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/homehead.css">
	<link rel="stylesheet" href="css/homeimage.css">
	<link rel="stylesheet" href="css/table.css">
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator1.php"); ?>

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
<!--<h2 style = "background-color:#eff; color:black; text-align:center;">Project Guided By:</h2> -->
<!--<table  class="center1"> -->
 <!-- <tr> -->
    <!--<td rowspan="2"><b>Project Supervisor</b></td> -->
    <!--<td>Dr. Md. Nazrul Islam Mondal</td> -->
  <!--</tr> -->
  <!--<tr>-->
    <!--<td>Professor & Head of CSE,</br>Rajshahi Univesity of Engineering & Technology</td> -->
  <!--</tr>-->
<!--</table> -->

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
