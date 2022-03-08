<?php
//check if the update button has been clicked
if (isset($_POST["btn_update"])){
    //start receiving the update data
    $updateName = $_POST["up_name"];
    $updateEmail = $_POST["up_email"];
    $updatePassword = $_POST["up_pass"];
    $userId = $_POST["u_id"];
    //connect to the db to return the data back to the database
    require_once "db_connection.php";
    //prepare an update query
    $updateQuery = UPDATE `users` SET `jina`='',`arafa`='',`siri`='' WHERE id = '$usersId';
    //use mysqli_query() to execute the update query
    $update = mysqli_query($connection, $updateQuery);
    //check if the update was successful
    if (isset($update)){
        //redirect back to users.php to see changes
        header(header: "location:users.php");
    }else{
        echo "update failed"
    }
}
