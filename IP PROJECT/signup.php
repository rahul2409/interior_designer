<?php
require_once('connection.php');
ob_start();

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass1 = $_POST['c_password'];

$query = "select * from users ";
$result = $conn -> query($query);
$rows = $result -> num_rows;


for($i=0;$i<$rows;$i++) {
  $result-> data_seek($i);
  $row = $result->fetch_array(MYSQLI_NUM);
  if($row[3] == $email && $row[1] == $name )
  {
    header('Location: http://localhost/interior_designer/IP%20PROJECT/signup_form.php?error=User_Already_Exists');
    //echo "<script> ". $message=document.getElementById('message');  message.innerHtml += 'username and email id already registered ';." </script>";
    exit("username and email id already registered ");
  }

}

$query = "insert into users (email_id,username,password) values ('".$email."','".$name."','".$pass."')";
$result = $conn -> query($query);

if($result){
  header('Location: http://localhost/interior_designer/IP%20PROJECT/login.html');
}
else{
  header('Location: http://localhost/interior_designer/IP%20PROJECT/signup.html');
}

 ?>
