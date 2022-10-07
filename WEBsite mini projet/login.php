<?php

$uname = $_POST['username'];
$upassword = $_POST['password'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reg";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from userdata where name = '$uname' && password = '$upassword'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
   header('Location:home.php');
}
else{
    header('Location:index.php');
}



$conn->close();

?>
