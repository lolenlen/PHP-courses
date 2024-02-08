<?php

include("database.php");
  session_start();
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
        <p class="reg_h" >Come back to Eternal Anguish</p>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          <p class="reg_p">username:</p>
          <input type="text" name="username">
          <p class="reg_p">password:</p>
          <input type="password" name="password"> <br>
          <input class="reg_signup_b reg_b" type="submit" name="submit" value="Log In">
          <a href="signup.php" class="login_link"><p>New Untainted Soul? Sign Up here!</p></a>   

        </form>    
        </div>
    </div>
   </div>


   <audio autoplay loop src="audio/Hell.mp3">
  </audio>
  <audio class="burning_hover" preload="auto" src="audio/button_burning.mp3">
  </audio>
</body>
</html>
<?php



  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login_username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $login_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($login_username)){
      echo"<p class='req_mes_error_login'>Please enter username</p>";
    } elseif(empty($login_password)){
      echo"<p class='req_mes_error_login'>Please enter password</p>";
    }else {

          $sql = "SELECT username, password FROM users";
          $result = mysqli_query($conn, $sql);
          
          $match_username = false;
          $match_password = false;
          
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] === $login_username) {
                    $match_username = true;
                    if (password_verify($login_password, $row['password'])) {
                        $match_password = true;
                        break;
                    }
                }
            }
          
          $_SESSION["username"] = $login_username;
          $_SESSION["password"] = $login_password;

          //$password = $accounts[$_SESSION["username"]] ?? null ;
            // $username = $passwords[$_SESSION["password"]] ?? null;
        
            //$passwordInput = $_SESSION["password"];
          // $hashPassword = password_hash($passwordInput, PASSWORD_DEFAULT);

          if($match_password && $match_username) {
            header("Location: buffer_page.php");
          } else {
            echo '<p style="color:red">Username/Password is not recognized</p>';
          }
      }
  } elseif (!empty($login_username) && !empty($login_password)) {
    echo"<p class='req_mes_error_login'> No Soul Found !</p>";
  }


mysqli_close($conn);

?>