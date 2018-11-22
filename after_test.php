<?php  
session_start();  
$user=$_SESSION['username'];
$message = "computer_science_1";
if(!$_SESSION['username'])  
{  
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
	
	
</head>

<body>
<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>
</br>


<div id="page-wrap">
<h1><b><font size="6">Mark Sheet:</font></b></h1>
</br>
<?php
	
	$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
	mysql_select_db("project");
	
	$quesans=array("quesans0","quesans1","quesans2","quesans3","quesans4","quesans5","quesans6","quesans7","quesans8","quesans9");
	
	$query=array();
	$totalr=0;
	$totalw=0;
	$totaln=0;
	
	$result1 = mysql_query("select * from $message");
	$n=mysql_num_rows($result1);
	
	for($i=0;$i<$n;$i++)
	
	{	
		$que=$quesans[$i];
		
		$query[$i] = mysql_real_escape_string($_POST[$que]) or die("Failed to query database ");
		
		$result = mysql_query("SELECT * FROM $message WHERE q_no='$i'+1 ")
				or die("Failed to query database ".mysql_error());
				
		$row = mysql_fetch_array($result);
		$x=preg_replace('/\s+/','',$query[$i]);
		$y=preg_replace('/\s+/','',$row['r']);
		
		echo $row['q_no'];
		echo ". ";
		echo $row['q'];
		echo "<br><br>";
		
		if( !strcasecmp($x,"noinputdetected") )
		{
			echo "Not Answered<br>";
			echo "Right Answer: ".$row['r']."<br>";
			$totaln++;
		}
		else
		{
		
			echo "Given Answer: ".$query[$i]."<br>";
			echo "Right Answer: ".$row['r']."<br>";
			echo "<br>";
			if(!strcasecmp($x,$y) )
			{
				echo "Given Answer is Right.<br>";
				$totalr++;
			}
			else 
			{
				echo "Given Answer is Wrong.<br>";
				$totalw++;
			}
		}
		echo "<br><br>";
	}
	
	echo "<div id='results'>$totalr / $n correct</div><br>";
	echo "<div id='results'>$totalw / $n wrong</div><br>";
	echo "<div id='results'>$totaln / $n not answered</div><br>";
	
	
	
	
$coni = mysqli_connect("localhost" , "root" , "" , "project")  or  die("Connection failed: ".mysqli_connect_error());
	
$sql = "INSERT INTO submission(user_id,question,correct,wrong,not_answered) VALUES 
('{$user}','{$message}',$totalr,$totalw,$totaln)";

if (mysqli_query($coni, $sql)) {
    //echo "Data1 was inserted  in table submission."."<br>";
} else {
    echo "no insertion" . mysqli_error($coni);
}

$sql = "Create or replace view $user AS select user_id,sub_id,question,correct,wrong,not_answered,sub_date from
submission where user_id='{$user}'";

if (mysqli_query($coni, $sql)) {
    //echo "view user created successfully."."<br>";
} else {
    echo "unsuccessful view submission" . mysqli_error($coni);
}

$result = mysql_query("SELECT * FROM $user group by question")
				or die("Failed to query database ".mysql_error());
$exam=mysql_num_rows($result);


$result = mysql_query("SELECT sum(correct) as sum FROM (select * from $user group by question) as t")
				or die("Failed to query database ".mysql_error());				
$correct = mysql_fetch_array($result);
$correct=$correct['sum'];


$result = mysql_query("SELECT sum(wrong) as sum FROM (select * from $user group by question) as t")
				or die("Failed to query database ".mysql_error());
$wrong = mysql_fetch_array($result);
$wrong=$wrong['sum'];


$result = mysql_query("SELECT sum(not_answered) as sum FROM (select * from $user group by question) as t")
				or die("Failed to query database ".mysql_error());
$not_answered = mysql_fetch_array($result);
$not_answered=$not_answered['sum'];


$sql = "UPDATE register
SET exam=$exam, correct=$correct, wrong=$wrong, not_answered=$not_answered
WHERE username='{$user}'";
if (mysqli_query($coni, $sql)) {
    //echo "update register added successfully."."<br>";
} else {
    echo "unsuccessful data insertion" . mysqli_error($coni);
}


$sql = "Create or replace view $user AS select user_id,sub_id,question,correct,wrong,not_answered,sub_date from
submission where user_id='{$user}'";
if (mysqli_query($coni, $sql)) {
    //echo "Create or replace view user created successfully."."<br>";
} else {
    echo "unsuccessful view submission" . mysqli_error($coni);
}


mysqli_close($coni);				
mysql_close($con);
?>
</br></br></br>
<h4 style = "color:green; text-align:center;">Copyright reserved ©sakibehsan13@gmail.com</h4></br></br>
</body>
</html>
