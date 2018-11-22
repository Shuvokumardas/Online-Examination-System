<!DOCTYPE html>
<?php  
session_start();//session starts here  
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

	if(isset($_GET['msgl']))
	{
		$message = $_GET['msgl'];
		if($message == 0)
		{
		?>
		<h3 style = "color:red; text-align:center;">Sorry Username or Password is wrong. Try Again.</h3>
		<?php		
		}
	}
?>	
	<form action = "login.php" method = "post">
	<table style = "margin-left:auto; margin-right:auto; width:400px;">
	
		<tbody>
			<tr style = "text-align:center">
				<td colspan="2"> <h2 style = "color:blue"> Login Now! </h2> </td>
			</tr>
		
			<tr> 
				<td> Username </td>
				<td> <input type="text" name="username" required autocomplete="off" placeholder = "Enter Username"> </td>
			</tr>

			<tr> 
				<td> Password </td>
				<td> <input type="password" name="password" required autocomplete="off"> </td>
			</tr>
		
			<tr style = "text-align:center"> 
				<td colspan="2"> <input type="submit" name="submit" value="Log In"> 
			</tr>
		
			<tr>
	             <td colspan="2">   </td>
			</tr>
		</tbody>
	</table>
	</form>
	</br></br></br>
	
<?php include("footer.php"); ?>

</body>
</html>
