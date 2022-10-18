<?php
session_start();
if(!$_SESSION['login']){
    header("location: ./registration.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="https://cdn.pixabay.com/photo/2022/08/14/13/01/top-7385857__340.jpg" alt="img not found">
    <p>This is home.</p>
    <a href="./logout.php"><button>log out</button></a>
</body>
</html>