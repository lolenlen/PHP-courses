<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 1</title>
</head>
<body>
  


</body>
</html>
<?php

  echo "this fucking language sucks <br>";
  echo "it was a pain in the ass to setup <br>";

  //variable = a reusable container that holds data
  //such as string, integer, float, boolean, etc

  $username = "Jake";
  $food = "Apple";
  $email = "jakeDdog@hotmail.com";


  //integers
  $age = 28 . " magical dog years old";
  $foodQuantity = 8;

  //floats
  $price = number_format(8.5, 2);
  $discount = 30/100;
  $discountPercentage = 100 * 30/100 . "%";
  $discountPrice = $price - ($price * $discount);
 

  //booleans
  $forsale = true; //=1
  $notForSale = false; //=0

  $total = null;
  $total = $discountPrice * $foodQuantity;
  $totalDollar = number_format($total, 2);


  echo "{$username} <br>";
  echo "What's up {$username} <br>";
  echo "{$username} likes to eat " . strtolower($food) . "<br>";
  echo "{$username}'s email is {$email} <br>";
  echo "Hey {$username}! How old are you? <br>";
  echo "I am {$age} and I have {$foodQuantity} " . strtolower($food) . "s btw <br>";
  echo "The " . strtolower($food) . "s costs \${$discountPrice} a piece <br>";
  echo "Overall, it was a really good deal<br>";
  echo "Because it was originally cost \${$price} but because of their recently limited tinme sale offer of {$discountPercentage} so it only cost me \${$totalDollar} !!! <br>";


  //Arithmetic operators
  //+ - * / **power %reminder of division
  $x = 3;
  $y = 7;
  $z = null;

  //$z = $x ** $y;
  $z = $y % $x;
  echo $z;

  // Increment/decrement operators
  // ++ --

  $number = -1;
  $number++;
  echo $number;

  $counterR = 10;
  $counterR+=10;
  echo $counterR;


  //operators precendance
  // ()
  // **
  //* / %
  // + -

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
