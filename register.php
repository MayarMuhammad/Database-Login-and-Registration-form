<?php
require_once("database.php");

$Email_Address = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$epassword = md5($password);

$x = "SELECT * FROM Users WHERE email='$Email_Address'";
$re = mysqli_query($conn, $x);
$row = mysqli_fetch_assoc($re);
$dep = mysqli_query($conn, "SELECT *FROM department");

if (mysqli_num_rows($re) > 0) {
  echo '<h2>Email already exists<h2>';
  echo '<a href="login.html">Login Page</a>';
  echo "\n";
  echo '<a href="signup.html">Signup Page</a>';;
} else {
  $insert_user = "INSERT INTO Users (email, name,password)
VALUES ('$Email_Address', '$name','$epassword')";

  if ($conn->query($insert_user) === TRUE) {
    echo "<h2> Welcome " . $name . "</h2>";
    echo '<a href="department.php">Departments Table</a>';;
  } else {
    echo "Error: " . $insert_user . "<br>" . $conn->error;
  }
}
