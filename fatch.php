<?php
// $server="localhost";
// $username="root";
// $password="";
// $con=mysqli_connect($server,$username,$password);
// if(!$con){
//     die("Connection Failed due to".mysqli_connect_error());
// }
// //echo"Succesfullct Connected To Database";
// $getinfo=$_POST['fatchid'];
// $sql="SELECT * FROM `test`.`student` WHERE id=$getinfo";
// $result=mysqli_query($con,$sql);
// $num=mysqli_num_rows($result);
// echo "$num Records found..<br>";
// /*if($num>0)
// {
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
// }*/
// while($row=mysqli_fetch_assoc($result))
// {
//     echo $row['id']."--".$row['name']."--".$row['mob'];
//     echo "<br>";
// }
// $u_name=$_POST['update_name'];
// $u_id=$_POST['update_id'];
// $sql="UPDATE TABLE `test`.`user` SET=$u_name WHERE id=$u_id;";
// echo $sql;
$getinfo=$_POST['fatchid'];
        $sql="SELECT * FROM `test`.`student` WHERE id=$getinfo";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        /*if($num>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row);
        }*/
        //displaying data
        echo "<p class='data'>$num Records Found...</p>";
        while($row=mysqli_fetch_assoc($result))
        {
                    $fid=$row["id"];
                    $fname=$row["name"];
                    $fmob=$row["mob"];
                    echo "<div class='data'>$fid -- $fname -- $fmob</div>";
                    echo "<br>";
                   
        }
