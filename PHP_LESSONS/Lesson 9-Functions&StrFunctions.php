<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions and str functions</title>
</head>
<body>
  
    <form action="index.php" method="post">

      <label>name:</label>
      <input type="text" name="name"><br>
      <label>age : </label>
      <input type="text" name="age"> <br>
      <input type="submit" value="submit"><br>

    </form>


</body>
</html>

<?php

  //function = write some code once, reuse when u need it
  //           type () after function name to invoke
  //           ex. add() substract() multiply() divide()

   $age = $_POST["age"];
   $name = $_POST["name"];

    function bdaySong($ageBday, $nameBday){
      echo "<p>
            Happy Bday dear $nameBday!<br>
            Happy bday to u!<br>
            Happy bday! happy day!<br>
            You are {$ageBday} yrs old!<br>
            Make a wish!!!!!!!!!!!!<br>
            </p>";

          
    }
    
  if(is_numeric($age) && is_string($name)){ /// or float or int or is_numeric()
    bdaySong($age, $name);
  } else {
    echo "Invalid Input";
  }
  
  //

  function isEven($number){
    $result = $number % 2; //or return $number % 2 ie the outcome/reult
    return $result;
  }

  //echo $result . "<br>";

  //

  function findHypotenuse(float $a, int $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
  }

  echo "<br>" . round(findHypotenuse(1, 2), 2);

  /// STRING FUNCTIONS

    $username = "Jake The Dog";
    $name = "Jake The Dog";
    $nameArray = array("Jake", "The", "Dog");
    $phone = "06-44-88-19-95";
    $equals = null;
    $firstname = null;
    $lastname = null;
    $fullname = null;

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20, "-");
    //$phone = str_replace("-", "_", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    $equals = strcmp($username, "Jake The Dag");
    //$count = strlen($phone);
    //$index = strpos($phone, "-");
    $firstname = substr($username, 0, 4);
    $lastname = substr($username, 5);
    $fullnameArrays = explode(" ", $name);
    $fullname = implode("-", $nameArray);

    echo "<br>" .  $firstname . "<br>";
    echo "<br>" .  $lastname . "<br>";
    foreach($fullnameArrays as $name){
      echo "<br> [" . $name . "]<br>" ; 
    }
    echo "<br>" .  $fullname . "<br>";
    echo "<br>" .  $equals . "<br>";
    echo "<br>" .  $username . "<br>";
    echo "<br>" .  $phone . "<br>";




?>

