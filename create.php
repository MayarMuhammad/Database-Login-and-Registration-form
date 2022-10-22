<?php
require_once("database.php");

$user_table = "CREATE TABLE IF NOT EXISTS Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
name VARCHAR(30) NOT NULL,
password VARCHAR(100) NOT NULL,
registeration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "ALTER TABLE `users` ADD UNIQUE(`email`)";

$department = "CREATE TABLE IF NOT EXISTS Deptartment (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL
)";

if ($conn->query($user_table) === TRUE) {
    echo "Table user_table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($department) === TRUE) {
    echo "Table department created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql) === TRUE) {
    echo "email is now UNIQUE <br>";
} else {
    echo "ERROR MAKING EMAIL UNIQUE:  " . $conn->error;
}
?>
