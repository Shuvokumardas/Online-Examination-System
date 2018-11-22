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

<header>
	<h1 style="font-size:300%; text-align:center;">ONLINE EXAMINATION</h1>
	<p style="color:yellow; text-align:center;"> <b><i>The Best Place to Test Your Knowledge</i></b></p>
	<p style="color:blue; text-align:right;"> 
		<?php 
		date_default_timezone_set("Asia/Dhaka"); 
		echo "Server-time:  " .date("l");
		echo " " .date("Y-m-d h:i a");
		?> 
	</p>
</header>

</body>
</html>