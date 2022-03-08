<?php
//check if the delete link has been clicked
if (isset($_GET["u_id"])) {
    $userId = $_GET["u_id"];
    //connect to the database to delete
    require_once "db_connection.php";
    //Prepare a delete query to delete
    $deleteQuery = "DELETE FROM 'users' WHERE id='$userId '";
    //user mysqli_query()nto complete the deletion
    $delete = mysqli_query($connection,$deleteQuery);
    //check if the deletion was successful
    if (isset(delete)) {
        //redirect the user back to users.php to confirm if the records has been deleted
        (header: header . "location:users.php");
    } else {
        echo "<script>alert('user deletion failed')</script>";
    }
}
}
