<?php
require_once("database.php");

if (isset($_POST['email'])) {

    $Email_Address = $_POST['email'];
    $password = $_POST['password'];
    $epassword = md5($password);

    $x = "SELECT * FROM Users WHERE email='$Email_Address' AND password='$epassword'";

    $re = mysqli_query($conn, $x);
    $row = mysqli_fetch_assoc($re);
    $dep = mysqli_query($conn, "SELECT *FROM department");

    if (mysqli_num_rows($re) > 0) {
        echo "<h2>Welcome " . $row["name"] . "</h2>";
        echo '<a href="department.php">Departments Table</a>';
    } else {
        echo "<p>Error : Invalid Login Credentials</p>";
        echo '<a href="login.html">Login Page</a>';
        echo "\n";
        echo '<a href="signup.html">Signup Page</a>';
    };
}
