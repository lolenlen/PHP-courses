<?php

  $db_server = "sql200.infinityfree.com";
  $db_user = "if0_35937627	";
  $db_pass = "prRqhsKRHlU";
  $db_name = "if0_35937627_gate2hell";
  $conn = "";

  

  try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
  }
  catch(mysqli_sql_exception){
    echo "<BR>You cannot connect<BR>";

  };

?>