<?php
  $title = $_GET['title'];
  $weather = $_GET['weather'];
  $usr_name = $_GET['usr_name'];
  $diary = $_GET['diary'];
  include 'connection.php';
  $query = "INSERT INTO member_table (title, weather, usr_name,diary) VALUES ('$title','$weather','$usr_name','$diary')";
    // $query = "INSERT INTO member_table (title, weather, usr_name,diary) VALUES ('test','weather','usr_name','diary')";
    $run = $con -> query($query);
    echo("<script>location.href='index.php';</script>");
?>