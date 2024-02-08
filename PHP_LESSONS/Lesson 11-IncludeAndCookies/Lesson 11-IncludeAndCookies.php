<?php

  // include() = Copies the content of a file (php/html/text/etc)
  //             and includes it in your php file.
  //              Sections of our website become reusable and
  //              Changes only need to be made in one place  

    include("header.html");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Include and Cookies
  </title>
</head>
<body>
  
    <p>Welcome to the Homepage</p>
    <p>Contents of the Homepage</p>

  


</body>
</html>

<?php

  /// Cookie = info about the user stored in a user's web-browser used for ads, browising preference
  // and other non sensitive data === found in inspect

  setcookie("favFood", "taco", time() + (86400 * 2), "/");
  setcookie("favDessert", "paris brest", time() + (86400 * 2), "/");
  setcookie("favDrink", "cranberry juice", time() + (86400 * 4), "/");

  foreach($_COOKIE as $key => $value){
     echo "{$key} = {$value} <br>";
  }

?>


<?php

    include("footer.html");

?>

<?php

  // include() = Copies the content of a file (php/html/text/etc)
  //             and includes it in your php file.
  //              Sections of our website become reusable and
  //              Changes only need to be made in one place  

    include("header.html");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Include and Cookies
  </title>
</head>
<body>
  
    <p>Welcome to the Homepage</p>
    <p>Contents of the Homepage</p>

  


</body>
</html>

<?php

  /// Cookie = info about the user stored in a user's web-browser used for ads, browising preference
  // and other non sensitive data === found in inspect

  setcookie("favFood", "taco", time() + (86400 * 2), "/");
  setcookie("favDessert", "paris brest", time() + (86400 * 2), "/");
  setcookie("favDrink", "cranberry juice", time() + (86400 * 4), "/");

  foreach($_COOKIE as $key => $value){
     echo "{$key} = {$value} <br>";
  }

?>


<?php

    include("footer.html");

?>

