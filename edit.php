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

<!-Database Connection->

<?php
$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
mysql_select_db("project");


$result = mysql_query("SELECT * FROM register where username='{$user}'");
$row = mysql_fetch_array($result);
?>

<?php

	if(isset($_GET['msg']))
	{
		$message = $_GET['msg'];
		if($message == 0)
		{
		?>
		<h3 style = "color:red; text-align:center;">Please Correctly Input Old Password.</h3>
		<?php		
		}
	}
?>

<form action = "after_edit.php" method = "post">
	<table style = "margin-left:auto; margin-right:auto; width:400px;">				

	   <tbody>
		<tr style = "text-align:center">
		   <td colspan="2"> <h2 style = "color:blue">Edit Profile</h2> </td>
		</tr>
		
		<tr> 
		   <td> New Password </td>
		   <td> <input type="password" name="password" required autocomplete="off"> </td>
		</tr>
		
		<tr> 
		   <td> Old Password </td>
		   <td> <input type="password" name="oldpassword" required autocomplete="off"> </td>
		</tr>

		<tr> 
		   <td> Firstname </td>
		   <td> <input type="text" name="fname" required value="<?php echo $row['fname']; ?>"> </td>
		</tr>

		<tr> 
		   <td> Lastname </td>
		   <td> <input type="text" name="lname" required value="<?php echo $row['lname']; ?>"> </td>
		</tr>

		<tr> 
		   <td> Gender </td>
		   <td> <input type="radio" name="gender" value = "Male" required <?php if($row['gender']=="Male"){ ?>checked <?php } ?> > Male  
			<input type="radio" name="gender" value = "Female" required <?php if($row['gender']=="Female"){ ?>checked <?php } ?> > Female 
			<input type="radio" name="gender" value = "other" required <?php if($row['gender']=="other"){ ?>checked <?php } ?> > Other 
		   </td>
		</tr>

		<tr> 
		   <td> Address </td>
		   <td> <textarea name= "address" cols="25" rows="5"><?php echo $row['address'];?></textarea></td>
		</tr>

		<tr> 
		   <td> Email ID </td>
		   <td> <input type = "email" name= "emailid" required value="<?php echo $row['emailid']; ?>"> </td>
		</tr>

		<tr> 
		   <td> Phone </td>
		   <td> <input type="text" name="phone" value="<?php echo $row['phone']; ?>"> </td>
		</tr>

		<tr style = "text-align:center"> 
		   <td colspan="2"> <input type="submit" name="submit" value="Submit"> 
			<input type="reset" name="reset" value="Reset"> </td>
		</tr>
		
		<tr>
	             <td colspan="2">   </td>
		</tr>
		
		<tr style= "text-align:center">
		    <td colspan="2">
		    </td>
		</tr>
	   </tbody>
	</table>
      </form>
<?php
mysql_close($con); 
echo "<br>"; 
?>
<?php include("footer.php"); ?>

</body>
</html>