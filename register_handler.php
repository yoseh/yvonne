<?php
//check if the button has been clicked
if (isset($_POST["btn_reg"])){
    //start receiving the data from the user
    $name = $_POST["u_name"];
    $email = $_POST["u_email"];
    $password = $_POST["u_pass"];

    //connect to the database to save the data
    require_once "db_connection.php";
    //prepare the insert query to save
    $insertQuery = "INSERT INTO `chrome`(`id`, `jina`, `arafa`, `siri`) VALUES (null,' $name','$email','$password')";

    //finally, save using mysqli_query()
    $save =  mysqli_query($connection,$insertQuery);
    //check if the saving was successful
    if(isset($save)){
        echo "<script>alert('User  registered _successfully')</script>";
    }else {
        echo "<script>alert('User_registration_failed')</script>";
    }
}
