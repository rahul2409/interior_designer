<?php
  require_once('connection.php');

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "select username,password from users;";

  $result = $conn -> query($query);

  $rows = $result -> num_rows;
  $c=0;

  for ($i=0;$i<$rows;$i++)
  {
    $result-> data_seek($i);
    $row = $result->fetch_array(MYSQLI_NUM);
    if ($row[0] == $username && $row[1] == $password){
      echo 'login Successful';
      $c=1;
      break;
    }
  }
  if($c == 0)
  {
    echo 'unsuccessful login';
  }
?>
