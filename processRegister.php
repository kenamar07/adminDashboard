<?php
require_once('connection.php');

if(isset($_POST['signUp']))
{
    //all code here
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    //check if username exist in the database
    $sqlUsername= mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'")
    $checkUsername=mysqli_num_rows($sqlUsername);
    //check email 
    $sqlemail = mysqli_query($conn, "SELECT * FROM account WHERE EMAIL = 'email'")
    $checkEmail= mysqli_num_rows($sqlEmail);

    if($checkUsername != 0){
        $msg ="Username already exist";
    }
    elseif(checkEmail !=0){
        $msg ="Email already in use. please try a different email address";
    }
    //password confirmation
    elseif($password != $confirmpassword)
    {
        $msg ="Passwords do not match";
    }
    //submit data to database table
    else{
        //create insert query
        $sql = mysqli_query($conn, "INSERT INTO account(username, email, password) VALUES('$username', '$email', '$password')");

        if($sql)
        {
            $msg= "Data submitted successfully";
        }
        else{
            $msg= 'Error';
        }
    }


}
?>