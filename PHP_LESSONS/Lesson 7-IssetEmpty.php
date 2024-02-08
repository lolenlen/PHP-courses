<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>isset - empty</title>
</head>
<body>
  
  <form action="index.php" method="post">
    <label>USERNAME:</label>
    <input type="text" name="username" id="username"> <br>
    <label>PASSWORD:</label>
    <input type="password" name="password" id="password"> <br>
    <input type="submit" value="Log In" name="login">
    <br><label>Capital:</label>
  </form>

</body>
</html>

<?php

  //isset() = returns TRUE if a variable is declared and not null
  //empty() = returns TRUE if a variable is not declared, false, null, ""

  $userName = true;

  if(isset($userName)){
    echo "set";
  } else {
    echo "not set";
  }

  $nameUser = true;

  if(empty($nameUser)){
    echo "empty";
  } else {
    echo "not empty";
  }

  //

  foreach($_POST as $key => $value){
    echo"<br>{$key} = {$value} <br>";
  }


  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
      echo "<br>username is missing<br>";
    } elseif(empty($password)){
      echo "<br> password is missing <br>";
    } else {
      echo "<br>Hello {$username}<br>";
    }
  }

  //



?>