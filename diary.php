<?php
	include 'connection.php';
	$query = "SELECT * FROM member_table ORDER BY seq DESC";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<a class="message-author" href="#"> <?php echo $row['usr_name'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['title']);?> </span>
	<span class="message-content"> <?php echo $row['diary'];?> </span>
</div>
<?php endwhile; ?>