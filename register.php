<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
     <h1>Register here</h1>
     <form method="post" action="register_handler.php">
         <input name="u_name" placeholder="Enter name" type="text"><br><br>
         <input name="u_email" placeholder="Enter email" type="email"><br><br>
         <input name="u_pass" placeholder="Enter password" type="password"><br><br>
         <input name="btn_reg" value="Register" type="submit">
         <a href="users.php">View Users</a>
     </form>
</body>
</html>
