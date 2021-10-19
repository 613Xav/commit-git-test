<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title> My website </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> $(document).ready(function() {
     $(".page").hide().fadeIn(750);
     $(".message").hide().fadeIn(1500);
    }) </script>
</head>
<body>
    <a href="logout.php"> logout</a>

    <h1 class="page"> This is the index page </h1>

    <br>
    <p class="message">Hello, <?= $user_data['user_name'];?><p>.
<body>
</html>