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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // echo("$name, $email, $password, $password");
    if($password != $cpassword){
        echo("Please enter same password");
    }
    else{
        $sql = "INSERT INTO `register` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email', '$password', current_timestamp())";
        $final = mysqli_query($con, $sql);
        if($final){
            header("location: ./home.php");

            $_SESSION['login'] = true;
        }
        else{
            echo("Error");
        }
    }

}


?>