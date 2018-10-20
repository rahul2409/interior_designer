<?php
  require_once('connection.php');

  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $email = $_POST["email"];
  $text = $_POST["text_area"];

  $query = "insert into subscribers(first_name,last_name,email,feedback) values ('".$fname."','".$lname."','".$email."','".$text."');";
  $result = $conn -> query($query);

  if($result){
    echo 'success';
  }
  else {
    echo 'unsuccessful';
  }
 ?>
