<?php
include 'env.php';

$conn=null;

function connect_to_db(){
    global $conn;

    if($conn!=null){
        return $conn;
    }

    $hostname=getenv("DB_HOST");
    $username=getenv("DB_USERNAME");
    $password=getenv("DB_PASSWORD");
    $db_name=getenv("DB_NAME");
    $port=getenv("DB_PORT");

    $conn=new mysqli($hostname,$username,$password,$db_name,$port);

    if($conn->error){
        die("Connection Failed");
        return null;
    }

    return $conn;
}