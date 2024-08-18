<?php
session_start();
?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/style.css" />
  <style>
    input[type=password], input[type=email] {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #2c2f33;
      border-radius: 36px;
    }
    h4 {text-align: right;}
  </style>
  <title>3A.net (Deamgus) - Registration</title>
</head>
<?php
$_SESSION['logintype'] = "register";
?>
<body>
<h1>Welcome to Deamgus!</h1>
<h3>Register here.</h3>
<form action="/welcome.php" method="POST">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Email Address: <input type="email" name="email"><br>
<input type="submit" value="Register">
</form>
<h4>Have an account already? Click <u><a href=/login.php>here</a></u>.</h4>
</body>
</html>
