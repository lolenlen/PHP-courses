


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Get and Post </title>
</head>
<body>
  <!--
  <div>

    <form action="index.php" method="get">
      <label for="">
        username:
      </label><br>
      <input type="text" name="username"><br>

      <label for="">
        password:
      </label><br>
      <input type="password" name="password"><br>
      <input type="submit" value="Log in">
    </form> 
  </div>
  <div>

    <form action="index.php" method="post">
      <label>
        usernameSECURED:
      </label><br>
      <input type="text" name="usernameSECURED"><br>

      <label for="">
        passwordSECURED:
      </label><br>
      <input type="password" name="passwordSECURED"><br>
      <input type="submit" value="Log in">
    </form> 
  </div>
-->

<form action="index.php" method="post">
  <label>quantity: </label><br>
  <input type="text" name="quantity"><br>
  <input type="submit" value="total"><br>
</form>

</body>
</html>


<?php
/*
  echo $_GET["username"] . "<br>";
  echo "{$_GET["password"]} <br>";

  echo $_POST["usernameSECURED"] . "<br>";
  echo "{$_POST["passwordSECURED"]} <br>";
*/

  $item = "pizza";
  $price = 8.99;
  $quantity = $_POST["quantity"];
  $total = null;

  $total = number_format($price * $quantity, 2);

  echo "Your total: \${$total}<br>";

  //$_GET, $_POST = special variables used to collect data from an HTML form data. It is sent to the file in the action attribute of <form>
  //                <form action="fileName.php" method="get">

  //$_GET = Data is appended to the url
  //        Not secure
  //        char limit
  //        bookmark is possible w/ values
  //        GET requests can be cached
  //        Better for a search page

  //%_POST = Data is pacakage inside the body of the HTTP request
  //         secure
  //         no data limit
  //         cannot be bookmark
  //         GET requests are not cached :c
  //         better for submitting credentials

?>