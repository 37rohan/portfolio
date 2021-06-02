<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "rohan";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$fname=$_POST['fname'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO portfolio (fname, email, msg) VALUES 
('$fname','$email','$msg')";
if ($conn->query($sql) === TRUE) {
    echo "your respose has been successfully added";
} else {
    echo "Error: " .$sql ."<br>" . $conn->error;
}

$conn->Close();
?>