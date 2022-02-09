<?php
include 'dbconnect.php';
if(isset($_POST['delete_id'])){
$del_acc=$_POST['delete_id'];
$sql="DELETE FROM `test`.`student` WHERE id='$del_acc';";
$isdeleted=false;
if($con->query($sql)==true)
{
    $isdeleted=true;
}
}
?>