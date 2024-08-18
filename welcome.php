<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/style.css" />
  <title>3A.net (Deamgus) - Registration</title>
</head>
<body>
<h1>Deamgus Registration</h1>
<?php
$server = '127.0.0.1';
$db_name = 'deamgus3a';
$db_user = '3A';
$db_password = '3apoglol';

$database = mysqli_connect($server, $db_user, $db_password, $db_name);
/*if ($database == false) {
  echo "Connection to database failed!";
} else {
  echo 'Connected!' . '<br>';
}*/

$result = $database->query("SELECT * from Users");
if ($result != false) {
  $id = $result->num_rows;
  $username = $_POST['username'];
  $discriminator = str_pad(rand(1,9999),4,'0',STR_PAD_LEFT);
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $query = "INSERT INTO Users (id, username, discriminator, email, creation_time, password) VALUES (?,?,?,?,?,?)";
  $result2 = $database->execute_query($query, [$id, $username, $discriminator, $email, date('U'), $password]);
  if ($result2 != false) {
    echo "New user $username#$discriminator has joined Deamgus - Welcome!";
    echo '<br>' . "Email: $email";
  }
}
?>
</body>
</html>
