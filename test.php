<?php  
session_start();  
$user=$_SESSION['username'];
$message = "computer_science_1";
if(!$_SESSION['username'])  
{  
	//echo $_SESSION['username']." not matched with database.<br>";
    header("Location: practicephp.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php

	if(isset($_GET['msgq']))
	{
		$message = $_GET['msgq'];
	}
?>
<!DOCTYPE html>

<html>

<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/homehead.css">
	<link rel="stylesheet" href="css/homeimage.css">
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<script type="text/javascript">
        function hideQuestions()
        {
            // Hide the questions
            document.getElementById("page-wrap").style.display = "none";
            // Show the message that the questions timed out
            document.getElementById("quicker").style.display = "block";
        }
 
        function checkTime()
        {
            secondsLeft = secondsLeft - 1;
            if(secondsLeft <= 0)
            {
                hideQuestions();
                //alert("Time is up!");
                document.getElementById("secondsLeft").style.color = "red";
                window.clearInterval(myTimer);
                writeTime("Timed out!");	
            }
            else
            {
                writeTime(secondsLeft + "s");
            }
        }
 
        function writeTime(msg)
        {
            document.getElementById("secondsLeft").innerHTML = msg;
        }
		
		var timer = setTimeout(function() {
            document.querySelector('[name="submit"]').click();
        }, 110000);//wait 100+10 second to move to show result
		
		function myFunction(){
		document.getElementById("submit").click();
		}
    </script>	
</head>

<body onload="">

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>
</br>

<h1 style = "color:red; text-align:center;"><font size="4">Timeout Exam Question: <span id="secondsLeft"></span></h1>
</br>

<div id="page-wrap">
<h1><b><font size="4">MCQ Quiz :</font></b></h1>
</br>
<?php
$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
mysql_select_db("project");  
?>
		
<form name="after_test" method ="Post" action ="after_test.php?msgq=<?php echo $message; ?>" id="quiz">

<?php  
  
$i=0;
$quesans=array("quesans0","quesans1","quesans2","quesans3","quesans4","quesans5","quesans6","quesans7","quesans8","quesans9");

$result = mysql_query("select * from $message");
$n=mysql_num_rows($result);

for($i=0;$i<$n;$i++)  
{
$row = mysql_fetch_array($result)  
?>
<p> <?php
	echo $row['q_no'];
	echo ". ";
	echo $row['q']." ";
	?>
	<input type="radio" name="<?=$quesans[$i];?>" value = "no input detected" checked/>
	<?php	
	echo "<br><br>";
	?>
</p>
	 
	<?php $option = $row['o_1']; ?>
	<input type="radio" name="<?=$quesans[$i];?>" value = "<?=$option;?>"> A)
	<?=$option?> <br><br>
	
	<?php $option = $row['o_2']; ?>
	<input type="radio" name="<?=$quesans[$i];?>" value = "<?=$option;?>"> B)
	<?=$option?> <br><br>
	
	<?php $option = $row['o_3']; ?>
	<input type="radio" name="<?=$quesans[$i];?>" value = "<?=$option;?>"> C)
	<?=$option?> <br><br>
	
	<?php $option = $row['o_4']; ?>
	<input type="radio" name="<?=$quesans[$i];?>" value = "<?=$option;?>"> D)
	<?=$option?> <br><br>
	
<?php
}
?>

	<input type = "submit" name = "submit" id="submit" onclick="myFunction()" value = "Submit">
</br>
</br>
</br>	
</form>
<?php
mysql_close($con); 
?>
</div>

<div id="quicker" style="display:none;">

<h2 style = "background-color:#eff; color:black; text-align:center;">You must answer more quickly next time!</h2>

</div>	
</br></br></br>
<h4 style = "color:green; text-align:center;">Copyright reserved ©sakibehsan13@gmail.com</h4></br></br>
</body>

<script>
    var secondsLeft = 100;
    writeTime(secondsLeft + "s");
    var myTimer = window.setInterval(checkTime, 1000);
</script>

</html>