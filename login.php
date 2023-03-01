<?php
include 'connect.php';
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Login Success";
    } else {
        echo "Login Failed";
    }
}
?>

