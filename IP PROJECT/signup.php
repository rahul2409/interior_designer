<?php
require_once('connection.php');

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass1 = $_POST['c_password'];

$query = "select * from users ";
$result = $conn -> query($query);
$rows = $result -> num_rows;

foreach ($rows as $row) {
  if($row['email_id'] == $email && $row['username'] == $name )
  {
    exit("username and email id already registered ");
  }
}

$query = "insert into users (email_id,username,password) values ('".$email."','".$name."','".$pass."')";
$result = $conn -> query($query);

if($result){
  echo " Success !!!";
}
else{
  echo "Not Successful";
}

$query="insert into users (user_stat) values ('admin') where user_id = 1";
$result = $conn -> query($query);

$result -> close();
$conn -> close(); 
 ?>
