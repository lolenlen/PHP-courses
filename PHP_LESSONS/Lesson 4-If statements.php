<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if statements</title>
</head>
<body>
  
  <div>
    <form action="index.php" method="post">
      <label>age:</label>
      <input type="text" name="age">
      <input type="submit" value="enter">
    </form>
  </div>

  <div>
    <form action="index.php" method="post">
      <label>Temperature in Celcius</label>
      <input type="text" name="temp">
      <input type="submit" value="enter">
    </form>
  </div>

</body>
</html>

<?php

  // similar to js if statements
  // == comparison operator

  $age = $_POST["age"];
  if ($age > 30) {
    echo "EKK! too old";
  } elseif ($age >= 18) {
    echo '<a href="https://youtu.be/ZFxxfik0LvE?si=eBcRrLdh0HGJDcEs" target="-blank">you may enter</a>';
  } elseif ($age == 0) {
    echo "you are a literally baby!";
  } elseif ($age <= 0) {
    echo "Invalid value";
  } else {
    echo "you must be 18+ to enter";
  };

  //could use booleans too

  $hours = 50;
  $rate = 15;
  $weeklySalary = null;

  if ($hours <= 0) {
    echo "<br> you made $0 this week <br>";
  } elseif ($hours <= 40) {
    $weeklySalary = $hours * $rate;
    echo "<br> you made \${$weeklySalary} this week <br>";
  } else {
    $weeklySalary = (40 * $rate) + (($hours - 40) * ($rate * 1.25));
    echo "<br> you made \${$weeklySalary} (overtime included) this week <br>";
  }

  // Logical Operators = combine conditional statements
  // if(condition1 && condition2) 

  //&& = true if both cond are true
  //|| = true if at least one cond is true
  //!  = true if false and false if true

  $temp = $_POST["temp"];
  $cloudy = null;
  $climate = null;


  $randCloud = rand(0, 1);

  if($randCloud == 0) {
    $cloudy = "clear";
  } else {
    $cloudy = "cloudy";
  };

  if($temp <= 14 && $temp >= 1) {
    $climate = "cold";
  } elseif ($temp <= 0 && $temp >= -10) {
    $climate = "freezing";
  } elseif ($temp < -10) {
    $climate = "danger freezing";
  } elseif ($temp >= 15 && $temp <= 30) {
    $climate = "warm";
  } elseif ($temp >= 31 && $temp <= 35) {
    $climate = "hot";
  } elseif ($temp > 36) {
    $climate = "danger hot";
  };

  if($cloudy && $climate) {
echo "The weather is {$climate} and the sky is {$cloudy}";
  };

  //switch = replacement to using many elseif statements, more efficient and less code to write

  $grade = "F";

  switch($grade){
    case "A":
      $result = "great";
      break;
    case "B":
      $result = "well";
      break;
    case "C":
      $result = "good";
      break;
    case "D":
      $result = "okay";
      break;
    case "F":
      $result = "not passed";
      break;
    case true: ///or just default:
      $result = "invalid";
      break;

  };

  if ($result == "invalid") {
    echo "<br> {$grade} is an {$result} grade. <br>";
  } elseif ($result) {
    echo "<br> You did {$result} <br>";
  };


?>