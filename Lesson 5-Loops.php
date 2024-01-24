<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>
<body>
    <div>
      <form action="index.php" method="post">
      <label>Countdown:</label>
      <input type="text" name="counter">
      <input type="submit" value="start">
      </form>

      <form action="index.php" method="post">
      <input type="submit" value="start" name="start">
      <input type="submit" value="stop" name="stop">
      </form>


    </div>
</body>
</html>

<?php 

  // for loop = repeat some code a certain times
  // counter; stopping condition; increments/decrements
 // $counter = $_POST["counter"];

 // for($i = $counter; $i > 0; $i--) {
  //  echo $i . "<br>";
  //};

  // while loop = do some code infinitely while some condition remains true

  $seconds = 0;
  $running = true;

  while($running){

    if(isset($_POST["stop"])){
      $running = false;
    } else {  
      $seconds+=0.005;
      echo $seconds . "<br>";
    };
    // wait 1 sec
    
  };

?>