<?php

$srever = "localhost";
$user = "root";
$password = "";
$database = "crud1";

$conn = mysqli_connect($srever,$user,$password,$database);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
