<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server, $username, $password, $database)
if($conn){
    die('No connection' .mysqli_connect_error());
}
{
    echo 'Database connection success';
}
else{
    echo 'Error occured' .mysqli_error($conn);
}
?>