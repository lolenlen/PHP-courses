<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>math functions</title>
</head>
<body>
  <div>
    <form action="index.php" method="post">

      <label>x:</label>
      <input type="text" name="x"><br>
      <label>y:</label>
      <input type="text" name="y"><br>
      <label>z:</label>
      <input type="text" name="z"><br>
      <input type="submit" value="total"><br>

    </form>
  </div>
    <form action="index.php" method="post">

      <label>radius:</label>
      <input type="text" name="radius"><br>
      <input type="submit" value="calculate"><br>

    </form>
  <div>

  </div>

</body>
</html>

<?php
//  $x = $_POST["x"];
//  $y = $_POST["y"];
//  $z = $_POST["z"];
//
  $total = null;
//absolute number function sends alawsy a positive number
//  $total = abs($x);

// round functions 
//  $total = round($x); to round
//  $total = floor($x); to always round down
//  $total = ceil($x);  to always round up

//power function - base, power
//$total = pow($x, $y);

//square root function
//$total = sqrt($x);

//pi function
//$total = pi($x);

//max function gives the highest/greatest value
//$total = max($x, $y, $z);
//min function gives the lowest value
//$total = min($x, $y, $z);

//random number function (up to 2 billion)
// (1, 6) you can set a min and max
//$total = rand(-100, 100);

//using the funtions
  $radius = $_POST["radius"];
  $circumference = null;
  $area = null;
  $volume = null;

  $circumference = round(2 * pi() * $radius, 2);

  $area = round(pi() * pow($radius, 2), 2);

  $volume = round(4/3 * pi() * pow($radius, 3), 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume}cm^3 <br>";
?>

