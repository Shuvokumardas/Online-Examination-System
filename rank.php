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
	<link rel="stylesheet" href="css/table.css">
	
	<style>
	body {
    background-color:#eee;
	}
	</style>
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>
</br>

<!-Database Connection->

<?php
$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
mysql_select_db("project");

$result = mysql_query("
select username, exam, correct, wrong, not_answered from 
(select username, exam, correct, wrong, not_answered from (SELECT username, exam, correct, wrong, not_answered, UNIX_TIMESTAMP(reg_date) as dat, reg_date from `register` Order by reg_date)as t order by exam) as t
order by correct desc");
$n=mysql_num_rows($result);

echo "<br>";
echo "<br>";
?>


<h2 style = "background-color:#eff; color:black; text-align:center;">Ranking According To Correct Answer</h2>
<table  class="center">
  <tr>
    <th>Rank</th>
    <th>Username</th>
	<th>No of exam</th>
    <th>Correctly Answered</th>
	<th>Wrongly Answered</th>
	<th>Not Answered</th>
  </tr>
<?php
for($i=0;$i<$n;$i++)  
{
$row = mysql_fetch_array($result);

$_session['use2']=$row['username'];

if($_SESSION['username']==$row['username'])
{
?>
<tr >
    <td id="td01"><?php echo $i+1; ?></td>
    <td id="td01"><a href="profile2.php?use2=<?php echo $row['username']; ?>"><?php echo $row['username']; ?></a></td>
    <td id="td01"><?php echo $row['exam']; ?></td>
	<td id="td01"><?php echo $row['correct']; ?></td>
	<td id="td01"><?php echo $row['wrong']; ?></td>
	<td id="td01"><?php echo $row['not_answered']; ?></td>
  </tr>
<?php
}
else
{
?>
<tr>
    <td><?php echo $i+1; ?></td>
    <td><a href="profile2.php?use2=<?php echo $row['username']; ?>"><?php echo $row['username']; ?></a></td>
    <td><?php echo $row['exam']; ?></td>
	<td><?php echo $row['correct']; ?></td>
	<td><?php echo $row['wrong']; ?></td>
	<td><?php echo $row['not_answered']; ?></td>
  </tr>
<?php
}
}
?>
</table>
<?php
echo "<br>";
mysql_close($con); 
?>

<?php include("footer.php"); ?>

</body>
</html>