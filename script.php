<?php
error_reporting(1);
$insert = false;
if (isset($_POST['name'])) {
    include "dbconnect.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $sql = "INSERT INTO `test`.`student` (`id`,`name`,`mob`,`date`) VALUES('$id','$name','$mob',current_timestamp());";
    // echo $sql;
    if ($con->query($sql) == true) {
        // echo"Succesfullly Inserted";
        $insert = true;
    } else {
        echo "ERROR:$sql $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="style.css">
    <title>SendData</title>
    <style>
    body {
        background-color: lightcyan;
    }

    .data {
        height: fit-content;
        width: fit-content;
        background: rgba(0, 0, 0, 0.1);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
        border-radius: 10px;
        padding: auto;
        margin-right: auto;
    }

    table {
        border: 10px;
        border: black;
        padding: 2px;
    }
    </style>
</head>

<body>
    <style>
    .form3 {
        position: absolute;
        margin-left: 1100px;
        margin-top: 40px;
        background: rgba(0, 0, 0, 0.12);
        border-radius: 12px;
        padding: auto;
        width: 300px;
        height: 250px;
        font-size: larger;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-variant: normal;
    }
    .form3 input{
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            height: 30px;
            width: 250px;

    }
    .form4{
        position: absolute;
        margin-left: 1100px;
        margin-top: 340px;
        background: rgba(0, 0, 0, 0.12);
        border-radius: 12px;
        padding: auto;
        width: 300px;
        height: 200px;
        font-size: larger;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-variant: normal;
    }
    .form4 input{
        background-color: rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            height: 30px;
            width: 250px;
    }
    
    </style>
    <div class="form3">
        <form action="script.php" method="post">
            <h2>Update Your Data</h2>
            <label for="update_name">Enter your ID.</label><br>
            <input type="text" name="update_id"><br>
            <label for="update_name">Update Your Name</label><br>
            <input type="text" name="update_name">
            <input type="submit">
            <?php
            error_reporting(0);
            include "update.php";
            if($isupdated==true){
                echo "Succesfully Updated...☺🙌";
            }
            ?>
        </form>
    </div>
    <div class="form4">
        <form action="script.php" method="post">
            <h2>Delete Your Data</h2>
            <label for="delete_id">Enter your ID.</label><br>
            <input type="text" name="delete_id"><br>
            <input type="submit">
            <?php
            include "delete.php";
            if($isdeleted==true)
            {
                echo "Your Account is deleted Succesfully..";
            }
            ?>
        </form>
    </div>
    <div class="insert">
        <form action="script.php" method="post">
            <h2>Insert Your Data</h2>
            <br>
            <input type="number" name="id" placeholder="Enter ID no">
            <br>
            <br>
            <input type="text" name="name" placeholder="Enter your name">
            <br><br>
            <input type="number" name="mob" placeholder="Enter your mobile number:"><br>
            <input type="submit"><br>
            <input type="reset">
            <?php
            if ($insert == true) {
                echo "Succesfully Inserted";
                $insert = false;
            }
            ?>
        </form>
    </div>
    <div class="form2">
        <form action="script.php" method="post">
            <h2>View Your Data</h2>
            <br>
            <input type="number" name="fatchid" placeholder="Enter id to get information">
            <input type="Submit" value="View/જુઓ ">
            <?php
            error_reporting(0);
            include "dbconnect.php";
            include "fatch.php";
            ?>
        </form>
    </div>
</body>

</html>