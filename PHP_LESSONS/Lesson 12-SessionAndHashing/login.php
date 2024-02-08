<?php

  // session = super global variable used to store info on a user to be used across multiple pages.
  //           a user is assigned a session-id for ex login credentials

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
</head>
<body class="body">
  <div>

  <h1>Welcome to this Webpage !</h1>
  <p>Log In to go to HomePage</p>

  </div>

  <div class="logInBubble">

  <form action="login.php" method="post">  
    <p>Username:</p>
    <p><input type="text" name="username" id="username"></p>
    <p>Password:</p>
    <p><input type="password" name="password" id="password"></p>
    <p><input type="submit" value="Log In" name="login"></p>
  </form>


  </div>






<style>

.logInBubble{
  width: 200px;
  padding: 10px 20px;
  margin: 10px 20px;
  border: 5px solid blue;
  background-color: aquamarine;
}

</style>
</body>

</html>

<?php

  $accounts = array(
    "jakedadawg"=>"rainbow12",
    "finnhooman"=>"pbyummy2"
  );
  $passwords = array_flip($accounts);

  if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"])){
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      $password = $accounts[$_SESSION["username"]] ?? null ;
      $username = $passwords[$_SESSION["password"]] ?? null;
     
      $passwordInput = $_SESSION["password"];
      $hashPassword = password_hash($passwordInput, PASSWORD_DEFAULT);

      if($_SESSION["username"] == $username && password_verify($password, $hashPassword)) {
        header("Location: home.php");
      } else {
        echo '<p style="color:red">Username/Password is not recognized</p>';
      }
    
    } elseif(!empty($_POST["username"])){
      echo '<p style="color:red">Invalid Password</p>';
    } elseif(!empty($_POST["password"])){
      echo '<p style="color:red">Invalid Username</p>';
    } else{
      echo '<p style="color:red">Please login</p>';
    }
  }

?>