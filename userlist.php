<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/style.css" />
  <style>
    th, td {text-align: center;}
  </style>
  <title>3A.net (Deamgus) - User List</title>
</head>
<?php
$server = '127.0.0.1';
$db_name = 'deamgus3a';
$user = '3A';
$password = '3apoglol';

/*echo '<br>';
echo 'Connecting to database...<br>';*/
$database = mysqli_connect($server, $user, $password, $db_name);
/*if ($database == false) {
  die("Connection to database failed!" . mysql.error());
} else {
  echo 'Connected!';
}*/

$query = "SELECT * FROM Users ORDER BY id";
$result = $database->query($query);
?>

<h1>Deamgus List of Users</h1>
<table>
  <tr>
    <th>User ID</th>
    <th>Username</th>
    <th></th>
    <th>Discriminator</th>
    <th>Email Address</th>
    <th>Password (Hashed)</th>
    <th>Time Registered (UTC<?php echo date("P");?>)</th>
  </tr>
  <?php
    while($rows=$result->fetch_assoc())
    {
  ?>
  <tr>
    <td><?php echo $rows['id'];?></td>
    <td><?php echo $rows['username'];?></td>
    <td>#</td>
    <td><?php echo str_pad($rows['discriminator'],4,"0",STR_PAD_LEFT);?></td>
    <td><?php echo $rows['email'];?></td>
    <td><?php echo $rows['password'];?></td>
    <td><?php echo date("H:i:s, M d Y", $rows['creation_time']);?></td>
  </tr>
  <?php
    }
  ?>
</table>
</html>
