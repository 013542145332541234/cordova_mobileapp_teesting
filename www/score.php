<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE UserScore (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 

username VARCHAR(30) NOT NULL,
easylevel1 INT(50),
easylevel2 INT(50),
easytotalscore INT(50),
moderatelevel1 INT(50),
moderatelevel2 INT(50),
moderatetotalscore INT(50),
hardlevel1 INT(50),
hardlevel2 INT(50),
hardtotalscore INT(50),
overallscore INT(50),


)";

if ($conn->query($sql) === TRUE) {
    echo "User Score Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>