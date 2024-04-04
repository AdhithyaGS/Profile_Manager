<?php
if(isset($_POST['check_submit_btn'])){
    $conn = new mysqli('localhost', 'root', '', 'user-reg-data');
    $email=$_POST['email_id'];
    $email_query = "SELECT * FROM reg_detail WHERE Email_ID='$email'";
    $email_query_run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($email_query_run)>0){
        echo "email already taken";
    }else{
        echo "its available";

    }
}
?>