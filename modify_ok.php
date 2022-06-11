<?php
  $title = $_GET['title'];
  $weather = $_GET['weather'];
  $usr_name = $_GET['usr_name'];
  $diary = $_GET['diary'];
  $seq = $_GET['seq'];
  include 'connection.php';
  $query = "UPDATE member_table SET title= '$title', weather= '$weather', usr_name ='$usr_name', diary = '$diary',date= '$date' WHERE seq =$seq";
  $run = $con -> query($query);
  echo("<script>location.href='index.php';</script>");
?>