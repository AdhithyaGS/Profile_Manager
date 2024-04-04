<?php

$fullName = $_POST['fullName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$host="localhost";
$uname="root";
$pass="";
$database="user-reg-data";
$conn= mysqli_connect("$host","$uname","$pass","$database");

$authenticated = FALSE;

$sql="INSERT INTO reg_detail VALUES('$username', '$fullName', '$email', '$password')";
if($conn->query($sql) === TRUE){
    $authenticated = TRUE;
}

$response = ['success' => $authenticated];
header('Content-Type: application/json');
echo json_encode($response);
mysqli_close($conn);
?>
