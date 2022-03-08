<?php
//check if the update link has been clicked
if (isset($_GET["u_id"])){
    //start receiving data sent via the update link
    $receivedName = $_GET["u_name"];
    $receivedEmail = $_GET["u_email"];
    $receivedPassword = $_GET["u_pass"];
    $userId = $_GET["u_pass"];
}else{
    //Return the user back to users.php
    header( "location:users.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>

</body>
</html>


