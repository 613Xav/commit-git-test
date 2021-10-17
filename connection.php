<?php

$dbhost= "localhost";
$dbuser= "xavier";
$dbpass= "password123";
$dbname= "login_sample_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{

die("no coneeeeeeeeect");

}