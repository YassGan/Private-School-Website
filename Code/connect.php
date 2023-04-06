<?php


$ServerName = "localhost";
$AdminName = "root";
$Password = "";
$DBName = "ecole_rousseau";

$con = new mysqli($ServerName, $AdminName, $Password, $DBName);

if (!$con) {
    die(mysqli_error($con));
}