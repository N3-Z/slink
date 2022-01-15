<?php
include 'model/User.php';

$user= new User();

if($user->validate_user_login("a","a")){
    echo "Login Success";
}
else{
    echo "Login Failed";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slink</title>
</head>
<body>
    <form action="/service/file2zip.php" method="post" enctype='multipart/form-data'>
        <input type="file" name="currentFile">
        <input type="submit" value="submit">
    </form>
</body>
</html>