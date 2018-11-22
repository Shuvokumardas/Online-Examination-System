<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE register (
username VARCHAR(40) PRIMARY KEY, 
password VARCHAR(40) NOT NULL,
fname VARCHAR(40) NOT NULL,
lname VARCHAR(40) NOT NULL,
gender VARCHAR(10) NOT NULL,
address VARCHAR(125),
emailid VARCHAR(50) NOT NULL,
phone VARCHAR(40),
reg_date TIMESTAMP,
exam integer,
correct integer,
wrong integer,
not_answered integer
)";

if (mysqli_query($con, $sql)) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}
echo "<br>";
// sql to create table
$sql = "CREATE TABLE computer_science_1 (
q_no INT PRIMARY KEY,
q VARCHAR(250) NOT NULL,
o_1 VARCHAR(50) NOT NULL,
o_2 VARCHAR(50) NOT NULL,
o_3 VARCHAR(50) NOT NULL,
o_4 VARCHAR(50) NOT NULL,
r VARCHAR(50) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "Table computer_science_1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

echo "<br>";
// sql to create table
$sql = "CREATE TABLE submission (
sub_id INT not null auto_increment,
user_id VARCHAR(50) NOT NULL,
question VARCHAR(50) NOT NULL,
correct INT NOT NULL,
wrong INT NOT NULL,
not_answered INT NOT NULL,
reg_date TIMESTAMP,
primary key(sub_id)
)";

if (mysqli_query($con, $sql)) {
    echo "Table submission created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
?>