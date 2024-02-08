<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Home</title>
  <link rel="stylesheet" href="home_styles.css">
</head>
<body>

<div class="hell_body">
<div class="hell_page">
    <p class="hell_h">

    WELCOME HOME!

    </p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input class="hell_logout" type="submit" value="Get Out" name="logout">
    </form>

  </div>
</div>
  
<audio autoplay loop volume="0.5">
    <source src="audio/hell_music.mp3" type="audio/mp3">
</body>
</html>

<?php

if(isset($_SESSION["username"])){
  echo '<p class="current_user">user: {$_SESSION["username"]}</p>';
} else {
  echo '<p class="current_user">user: {$_SESSION["username"]}</p>';
}

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
  }
 

?>