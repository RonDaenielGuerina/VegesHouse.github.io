<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{

   $username = $_POST['username'];
   $password =  $_POST['password'];
   $email =  $_POST['email'];


   if(!empty($username) && !empty($password) && !is_numeric($username))
   {

    $user_id = random_num(15);
    $id = $user_id;
    $query = "insert into users (user_id, id, email, username, password) values ('$user_id', '$id', '$email', '$username', '$password')";
    mysqli_query($con, $query);

    header("Location: login.php");
    die;
   }

   else
   {
    echo "Invalid username or password!";
   }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>New Account</title>
  <link rel="stylesheet" href="Page1.css">
</head>
<body>
  <br><br><br>
  <h1>Create a new account</h1>
  <form method="post">
  <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <div class="create">
          <input type="submit" id="button" style="text-decoration: none;" value="Sign up">
        </div>
        <br>
        <br>
        <br>
</form>
</body>
</html>