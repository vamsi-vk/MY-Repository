<?php


$email = $_POST['email'];
$name =$_POST['name'];
$Upassword =$_POST['password'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userdata (email, name, password)
VALUES ('$email', '$name', '$Upassword')";

if ($conn->query($sql) === TRUE) {
  header('Location:index.php');

} else {
  echo 'enter vaild mail';
  echo '<a href="signup.php">try agin</a>';
   
}

$conn->close();













?>
