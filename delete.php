<?php
	include 'connection.php';
    $seq = $_GET['seq'];
    $query = "DELETE FROM member_table where seq= $seq";
    $re = mysql_query($query, $con);
    $run = $con -> query($query);
    echo("<script>location.href='index.php';</script>");
?>