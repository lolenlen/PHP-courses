<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Falling down</title>
  <link rel="stylesheet" href="buffer_page.css">
</head>
<body class="pits_hell_body">

<div class="pits_hell_page">
  <img src="images/pits of hell.png" alt="Spinning Zooming Image" class="pits_hell_img">
</div>
  
<audio autoplay loop>
    <source src="audio/falling.mp3" type="audio/mp3">
    <source src="audio/burning.mp3" type="audio/mp3">
    <source src="audio/burning_whoosp.mp3" type="audio/mp3">

</audio>
</body>
</html>

<?php
$goToHell = true;

  if($goToHell){
    echo "<script>
    setTimeout(function(){
        window.location.href = 'Home.php';
    }, 2000);
  </script>";
  }
 

?>