<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitize/validate input</title>
</head>
<body>
  
    <form action="index.php" method="post">
<p>Sanitizing</p>
      <label>username:</label>
      <input type="text" name="username"><br>
      <label>age :</label>
      <input type="text" name="age"><br>
      <label>email:</label>
      <input type="text" name="email"><br>
      <input type="submit" value="login" name="login"><br>

  <p>Validating</p>
      <label>username:</label>
      <input type="text" name="usernameV"><br>
      <label>age :</label>
      <input type="text" name="ageV"><br>
      <label>email:</label>
      <input type="text" name="emailV"><br>
      <input type="submit" value="login" name="loginV"><br>

    </form>


</body>
</html>

<?php

//validation checks if data meets specific criteria, 
//while sanitization cleans or filters data to make it safe for further use.

    if(isset($_POST["login"])){

      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

      if($username){
        echo "<br> Your username is {$username} <br>";
      }

      if($age){
        echo "<br> Your age is {$age} <br>";
      }

      if($email){
        echo "<br> Your email is {$email} <br>";
      }
      
      


    };

    if(isset($_POST["loginV"])){

      $usernameV = filter_input(INPUT_POST, "usernameV", FILTER_SANITIZE_SPECIAL_CHARS);
      $ageV = filter_input(INPUT_POST, "ageV", FILTER_VALIDATE_INT);
      $emailV = filter_input(INPUT_POST, "emailV", FILTER_VALIDATE_EMAIL);
 
      if(empty($usernameV)){
        echo "<br>V: Not a valid username <br>";
      } else {
       echo "<br>V: Your username is: {$usernameV} <br>";
      }
 
       if(empty($ageV)){
         echo "<br>V: Not a valid age <br>";
       } else {
        echo "<br>V: Your age is: {$ageV} <br>";
       }
 
       if(empty($emailV)){
        echo "<br>V: {$emailV} is an invalid email <br>";
       } else {
        echo "<br>V: Your email is: {$emailV} <br>";
       }
       
       
 
 
     };
 

?>

