<?php
// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "rpractice";
session_start();

$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    echo("Cannot Connect to DB");
}
else{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select* from register where email='$email' AND password = '$password' ";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        // $login = true;

        $_SESSION['login'] = true;
        header("location: ./home.php");
        // echo("login Success");

        
    }
    else{
        ECHO ("Invalid Credentials");

    }

    }
    
?>