<?php

  include("database.php");
/* 
  $username = "peppermint";
  $password = "buttlicker";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, password)
          VALUES ('$username','$hash')";


  try{
    mysqli_query($conn, $sql);
    echo"user is now registered";
  }
  catch(mysqli_sql_exception){
    echo"cannot register this username/password";
  }
*/
/* 
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo $row["user_id"] . "<br>";
      echo $row["username"] . "<br>";
      echo $row["reg_date"] . "<br>";
      echo "<br>";
    };
  }  else {
    echo "no user found";
  }

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="script.js"></script>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Hell !</title>
</head>
<body>
  <div class="page_body">
    <div class="reg_box">
      <p class="reg_box_h" >ENTRY TO HELL!</p>
        <div class="reg">
        <p class="reg_h" >Sign Up to Eternal Anguish</p>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          <p class="reg_p">username:</p>
          <input type="text" name="username">
          <p class="reg_p">email:</p>
          <input type="text" name="email">
          <p class="reg_p">password:</p>
          <input type="password" name="password">
          <p class="reg_p">confirm password:</p>
          <input type="password" name="confirm_password"> <br>
          <input class="reg_signup_b reg_b" type="submit" name="submit" value="Sign Up">
        </form>    
        </div>
    </div>
   </div>
</body>
</html>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $confirm_password = filter_input(INPUT_POST, "confirm_password", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    if(empty($username)){
      echo"<p class='req_mes_error'>Please enter a username</p>";
    } elseif(empty($email)){
      echo"<p class='req_mes_error'>Please enter a email</p>";
    } elseif(empty($password)){
      echo"<p class='req_mes_error'>Please enter a password</p>";
    } elseif(empty($confirm_password) || $confirm_password != $password ){
      echo"<p class='req_mes_error'>Passwords does not match</p>";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (username, password, email)
              VALUES ('$username', '$hash', '$email')";
      try{
        mysqli_query($conn, $sql);
        echo"<p class='req_mes_good'>Soul Acquired!</p>";
      } catch (mysqli_sql_exception){
        echo"<p class='req_mes_error'>Username is already burning</p>";
      }
    }
  } else {
    echo"<p class='req_mes_error'> Soul's too pure to enter !</p>";
  }


mysqli_close($conn);

?>