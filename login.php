<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $password =  $_POST['password'];

  if (!empty($username) && !empty($password)) {
    $query = "select * from users where username = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {
          $_SESSION['user_id'] = $user_data['user_id'];

          header("Location: index.php");
          die;
        }
      }
    }
    $message = "Incorrect username or password!"; 
  } else {
    $message = "Incorrect username or password!" ;
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <style>
    	* {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
body {
  font-family: 'Poppins';
  text-align: center;
  background-position: fixed;
  background-size: cover;
  background-position: center center;
  background-image: url("login.jpg");
  height: 100vh;
  width: 100%;
}

		header {
			background-color: transparent;
			color: #00CDAC;
			padding: 10px;
			height:100px ;
		}
		h1 {
			margin: 0;
			font-size: 100px;
			font-weight: bold;
			text-align: center;															`
			-webkit-text-stroke: 1.3px #000;
		}
form {
	background-color: rgba(250,250,250,0.2);
			margin: 20px auto;
			max-width: 400px;
			padding: 20px;
			border: 2px solid black;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
input[type="text"],
		input[type="password"] {
			padding: 10px;
			width: 100%;
			border: none;
			border-radius: 5px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		.btn {
			background-color:green;
			color: #fff;
			padding: 5px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-weight: bold;
			margin-top: 5px;
		}
		button:hover {
			background-color: #444;
		}
#create-account-link {
			display: block;
			margin-top: 10px;
			text-align: center;
		}
		#create-account-link a {
			color: #333;
			text-decoration: underline;
		}

	
		input[type="submit"] {
			padding: 10px;
			font-size: 20px;
			background-color:#1FA2FF;
			width: 50%;
			border: none;
			border-radius: 5px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
</style>
<body>
	<header>
		<h1>Login Veges House</h1>
	  <link rel="stylesheet" href=""/>
	
	</header>
<br><br>
	<form method="post">
      <div class="div3">
        <label for="username">username</label>
        <br>
        <input class="form-control me-4" type="text" placeholder="username" id="text" name="username" required>
      </div>

      <br>
      <br>

      <div class="div4">
        <label for="password">password</label>
        <br>
        <input class="form-control me-4" type="password" placeholder="password" id="text" name="password" required>
      </div>
    

      <?php
    if (isset($message)){
      echo "<div>$message</div>";
    }
    ?>
    
      <div class="reset">
      <b><a href="Reset.php" style="color: black;"> Forgot password? </a></b>
      </div>

      <br>
      <br>
      <br>

      <div class="div5">
        <input type="submit" id="button" style="text-decoration: none;" value="Login">
      </div>

      <br>
      <div class="text">
    <p style="color: black;" >Doesn't have any account?<a href="signup.php" >Sign up now</a></p>
      </div>


    </form>
  

</body>
</html>


