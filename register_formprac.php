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
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator1.php"); ?>

<?php

	if(isset($_GET['msgr']))
	{
		$message = $_GET['msgr'];
		if($message == 0)
		{
		?>
		<h3 style = "color:red; text-align:center;">Sorry Registered Username. Try Another.</h3>
		<?php		
		}
		if($message == 1)
		{
		?>
		<h3 style = "color:red; text-align:center;">Sorry Username can't contain any space. Try Another.</h3>
		<?php		
		}
	}
?>

	<form action = "register.php" method = "post">
	<table style = "margin-left:auto; margin-right:auto; width:400px;">				

	   <tbody>
		<tr style = "text-align:center">
		   <td colspan="2"> <h2 style = "color:blue"> Register Now! </h2> </td>
		</tr>
		
		<tr> 
		   <td> Username </td>
		   <td> <input type="text" name="username" required autocomplete="off" placeholder = "Enter Username"> </td>
		</tr>

		<tr> 
		   <td> Password </td>
		   <td> <input type="password" name="password" required autocomplete="off"> </td>
		</tr>

		<tr> 
		   <td> Firstname </td>
		   <td> <input type="text" name="fname" required placeholder = "Enter Firstname"> </td>
		</tr>

		<tr> 
		   <td> Lastname </td>
		   <td> <input type="text" name="lname" required placeholder = "Enter Lastname"> </td>
		</tr>

		<tr> 
		   <td> Gender </td>
		   <td> <input type="radio" name="gender" value = "Male" required> Male  
			<input type="radio" name="gender" value = "Female" required> Female 
			<input type="radio" name="gender" value = "other" required> Other 
		   </td>
		</tr>

		<tr> 
		   <td> Address </td>
		   <td> <textarea name= "address" cols="25" rows="5" > </textarea> </td>
		</tr>

		<tr> 
		   <td> Email ID </td>
		   <td> <input type = "email" name= "emailid" required placeholder = "Enter a valid email"> </td>
		</tr>

		<tr> 
		   <td> Phone </td>
		   <td> <input type="text" name="phone" placeholder = "Optional"> </td>
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
<?php include("footer.php"); ?>

</body>
</html>
