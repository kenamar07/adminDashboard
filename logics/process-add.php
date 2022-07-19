<?php
require_once('logics/connection.php');
if(isset($_POST['submitButton']))
{
    //1. fetch from data
    $fullName = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    //2. Submit from data
    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname, phonenumber, email, gender, course) VALUES('$fullName', '$phone', '$email', '$gender', '$course')");

    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else{
        echo "Error Occurred";
    }
}
?>