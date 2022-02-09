<?php 
include "dbconnect.php";
$isupdated=false;
$u_name=$_POST['update_name'];
$u_id=$_POST['update_id'];
$sql="UPDATE `test`.`student` SET name='$u_name' WHERE id=$u_id;";
if($con->query($sql)==true)
{
    $isupdated=true;
    //echo"Succesfully Updated ";
}
?>