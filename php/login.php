<?php

error_reporting(E_ALL);

$email = $_POST['email'];
$password = $_POST['password'];

$host="localhost";
$uname="root";
$pass="";
$database="user-reg-data";

$conn= mysqli_connect("$host","$uname","$pass","$database");

$authenticated = FALSE;

$check = "SELECT * FROM reg_detail WHERE Email_ID='$email' and password='$password'";
$result = mysqli_query($conn, $check);
$count = mysqli_num_rows($result);
if($result && $count === 1){
    $authenticated = TRUE;
}
$response = ['success' => $authenticated];
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>

