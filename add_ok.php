<?php
  $title = $_GET['title'];
  $weather = $_GET['weather'];
  $usr_name = $_GET['usr_name'];
  $diary = $_GET['diary'];
  $today = date("Y/m/d");
  include 'connection.php';
  $query = "INSERT INTO member_table (title, weather, usr_name,diary, date) VALUES ('$title','$weather','$usr_name','$diary','$today')";
  $run = $con -> query($query);
  echo("<script>location.href='index.php';</script>");
?>