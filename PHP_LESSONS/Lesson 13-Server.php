<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <p>username:</p>
    <input type="text" name="username" id="username">
    <input type="submit" name="submit">
  </form>

</body>
</html>

<?php

  // $_SERVER = SGB that contains headers, paths, and script locations.
  //    The entrires in this array are created by the web server.
  //    Shows nearly everythinbg you need to know about the current web page environment/

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      echo "p";
    }


    foreach($_SERVER as $key => $value){
      echo "{$key} = {$value} <br>";
    }

?>