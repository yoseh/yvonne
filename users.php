<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
     <h1>Chrome Users</h1>
     <table>
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Delete</th>
             <th>Update</th>
         </tr>
         <?php
         //start by connecting to the database
         require_once  "db_connection.php";
         //prepare the select query to fetch the data
         $selectQuery = "SELECT * FROM 'users' WHERE 1";
             //finally, use mysqli_query() to grab all the users from the table
         $users = mysqli_query($connection,$selectQuery);
         //use a loop to print the users
         foreach ($users as $user){
             $userName = $user["jina"];
             $userEmail = $user["arafa"];
             $userPassword =  $user["siri"];
             $userId = $user["id"];
             //echo the user in the table
             echo "<tr>
                     <td>$userName</td>
                     <td>$userEmail</td>
                     <atd><a href='#'> Delete</a>td>
                     <td><a href='#'>update</a></td>
               </tr>";
         }

         ?>

     </table>

</body>
</html>

