<?php

if(!isset($_POST['email'])||!isset($_POST['username'])||!isset($_POST['password'])){
    die("error");
}

include '../model/User.php';

$user=new User();

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

try{
    $user->register_user($username,$password,$email,false);
}catch(Exception $e){
    die("error");
    return false;
}

return true;

?>