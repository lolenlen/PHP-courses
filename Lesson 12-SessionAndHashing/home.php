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
  <title>Home</title>
</head>
<body>

<div>

  <h1>Nice to see you again !</h1>
  <p>You are in the HomePage</p>
  
</div>

<div>

<form action="home.php" method="post">
  <input type="submit" value="Log Out" name="logout">
</form>


</div>


</body>
</html>

<?php

if(isset($_SESSION["username"])){
  echo "user:" . $_SESSION["username"];
}

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: login.php");
  }
 

?>