<?php
include 'dbconnect.php';
error_reporting(0);
$user=$_POST['username'];
$pass=$_POST['psd'];
// $p1=password_hash($pass);
$sql="INSERT INTO `test`.`user`(`user`,`password`) VALUES('$user','$pass');";
if($con->query($sql)==true)
{
    // echo"Succesfullly Inserted";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash-password</title>
</head>
<body>
    <form action="sample.php" method="post">
        <label for="username">Username:
        <input type="text" name="username">
        <br>
        <br>
        <label for="password">Enter Password:
            <input type="password" name="psd">
            <br>
            <br>
        <input type="submit" value="submit">
</form>
</body>
</html>