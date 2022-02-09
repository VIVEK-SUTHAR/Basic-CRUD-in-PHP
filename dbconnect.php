<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection Failed due to".mysqli_connect_error());
}
//echo"Succesfullct Connected To Database";
?>