<?php
	include 'connection.php';
    $seq = $_GET['seq'];
    $query = "DELETE from member_table where seq= $seq";
    $run = $con -> query($query);
    echo("<script>location.href='index.php';</script>");
?>