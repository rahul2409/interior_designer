<?php
  require_once('connection.php');

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "select username,password,user_stat from users;";

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
    //echo 'unsuccessful login';
    header ('Location: http://localhost/interior_designer/IP%20PROJECT/login1.php?error=Invalid Login check username or password');
  }
  if($c == 1){
    if($row[2] == 'admin'){
      session_start();
      $_SESSION['username'] = $row[0];
      $_SESSION['password'] = $row[1];
      $_SESSION['admin'] = $row[2];
      header('Location: http://localhost/interior_designer/IP%20PROJECT/admin.php?username='.$_SESSION['username']);
    }
    else{
      session_start();
      $_SESSION['username'] = $row[0];
      $_SESSION['password'] = $row[1];
      header('Location: http://localhost/interior_designer/IP%20PROJECT/index.php?username='.$_SESSION['username']);
    }
  }
?>
