<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
  
  <form action="Lesson 6-Array.php" method="post">
    <label>Country:</label>
    <input type="text" name="country" id="country">
    <input type="submit" value="enter">
    <br><label>Capital:</label>
  </form>

</body>
</html>

<?php

function convertToStartCase($inputString) {
  // Use ucwords to capitalize the first letter of each word
  $startCaseString = ucwords($inputString);

  // If you have specific words you want to keep lowercase (e.g., "and", "or", "the"), you can customize this array
  $exceptions = array("and", "or", "the");

  // Convert specified exceptions back to lowercase
  foreach ($exceptions as $exception) {
      $startCaseString = str_replace(ucwords($exception), strtolower($exception), $startCaseString);
  }

  return $startCaseString;
}

  $capitals = array(
    "France"=>"Paris",
    "England"=>"London",
    "Spain"=>"Madrid",
    "Belguim"=>"Brussel",
    "Italy"=>"Rome"
  );

  $capitals["China"] = "Beijing";

  $capital = $capitals[convertToStartCase($_POST["country"])];

  echo $capital . "<br>" . "<br>";



  // array = variable that can hold/store one or more value at a time

  $foods = array("apple", "orange", "banana", "coconut");

  echo $foods[0] . "<br>";

  $foods[1] = "mango"; // change a variable
  array_push($foods, "pineapple", "kiwi", "apple"); ///adds/pushes variables
  array_pop($foods); // eliminates last variable
  array_shift($foods); //eliminates first variable
  $reversedFoods = array_reverse($foods); // creates a new reversed array that can be asign to a variable new or the same
  echo count($foods); // count value in an array
    
  echo  "<br> foods <br>";
  foreach($foods as $food){
    echo $food . "<br>";
  };

  echo "<br> reversed foods <br>";
  foreach($reversedFoods as $reversedFood){
    echo $reversedFood . "<br>";
  };

  //// associative array - an array made of key=>value pairs

  // item => price
  // id => username


  //almost all array functions can be used
  //$capitals["France"] = "Lyon";
  //echo $capitals["France"];
  // $values = array_values($capitals);
  $keys = array_keys($capitals);
  $flippedCapitals = array_flip($capitals); // keys and values flips


    foreach($capitals as $key => $value){
      echo "<br> {$key} = {$value} <br>";
    };

    foreach($flippedCapitals as $key => $value){
      echo "<br> {$key} = {$value} <br>";
    };




?>