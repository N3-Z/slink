<?php

if(!isset($_POST['username'])&&!isset($_POST['password'])){
    // header("Location: ../index.php");
    die("error");
}

include '../model/User.php';

$user= new User();

if(isset($_POST['login_check'])){
    $username="";
    $password="";
    if(isset($_POST['username'])){
        $username=$_POST['username'];
    }
    if(isset($_POST['password'])){
        $password=$_POST['password'];
    }
    if($user->validate_user_login($username,$password)){
        die("Correct");
    }
    else{
        die("Invalid username or password");
    }
}
